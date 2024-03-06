<?php 

  
class Manager{

    private $connexion;


    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    // autre methodes a trier par methodes par classes 

  public function LoadAllDestination()
  {
    $prepareSQL = $this->connexion->prepare('SELECT * FROM destination');
    $prepareSQL->execute();

    $listDestinations = $prepareSQL->fetchAll(PDO::FETCH_ASSOC);

    $destinationArray = [];

    foreach ($listDestinations as $key) {

      $destination = new Destination($key);
      // var_dump($destination);
    

       if (in_array($destination->getLocation(), $destinationArray) == false) {
        
               array_push($destinationArray, $destination);
       }
    }

    return $destinationArray;
  }
 


   public function DestinationByCompanie(string $destination)
   {
       $prepareSQL = $this->connexion->prepare('SELECT * FROM destination 
                                                  LEFT JOIN tour_operator 
                                                ON destination.tour_operator_id = tour_operator.idTO 
                                                 WHERE destination.location = ?'
                                           );
  
     $prepareSQL->execute([$destination]);

     $destinations = $prepareSQL->fetchAll(PDO::FETCH_ASSOC);

     $destinationArray = [];

     foreach ($destinations as $key) {

          $destinationObject = new Destination($key); 
          $OperatorObject = new TourOperateur($key); 

        $destinationObject->pushOperatorInArray($OperatorObject);

        array_push($destinationArray, $destinationObject);
   }
  
     return $destinationArray;

 }

  
    public function getALLTourOperator()
    {
          $prepareSQL = $this->connexion->prepare('SELECT * FROM tour_operator 
                                                      JOIN review  
                                                      ON tour_operator.idTO = review.tour_operator_id');
          $prepareSQL->execute();
          
          $TourOperator = $prepareSQL->fetchAll(PDO::FETCH_ASSOC);

          $TourOperatorArray = [];

          foreach ($TourOperator as $key) {

              $TO = new TourOperateur($key);
              $review = new Review($key);

              $TO->pushReviewInArray($review);
            array_push($TourOperatorArray, $TO); 
          }
          return $TourOperatorArray;
    }

}