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



  //  public function getALLTourOperator() 
  //  {
  //      $prepareSQL = $this->connexion->prepare('SELECT * FROM tour_operator');
  //      $prepareSQL->execute();

  //      $tourOperator = $prepareSQL->fetchAll(PDO::FETCH_ASSOC);

  //      $tourOperatorArray = [];

  //      foreach ($tourOperator as $key) {
   
  //           $OperatorObject = new TourOperateur($key);   
  //           array_push($tourOperatorArray, $OperatorObject);
  //    }

  //    return $tourOperatorArray;
  //  }
  

    public function getALLTourOperator()
    {
          $prepareSQL = $this->connexion->prepare('SELECT * FROM tour_operator 
                                                      ');
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



    public function GetDestinationById(int $id)
    {
      $prepareSQL = $this->connexion->prepare('SELECT * FROM destination WHERE destination.id = ?');
      $prepareSQL->execute([$id]);

      $destination = $prepareSQL->fetch(PDO::FETCH_ASSOC);
      
        $destinationObject = new Destination($destination);  

    return $destinationObject;
    }


    public function getTourOperatorByDestination($id)
    {
      $prepareSQL = $this->connexion->prepare('SELECT * FROM destination
                                                  JOIN tour_operator 
                                                ON destination.tour_operator_id = tour_operator.idTO 
                                                  WHERE destination.tour_operator_id = ? 
                                                ');
      $prepareSQL->execute([$id]);

      $tourOperator = $prepareSQL->fetchAll(PDO::FETCH_ASSOC);

      $array = [];

      foreach ($tourOperator as $key) {

        $tourOperatorObject = new TourOperateur($key);
        array_push($array, $tourOperatorObject);
      }

      return $array;
    }

    public function getscoreByTourOperatorId($id)
    {
      $prepareSQL = $this->connexion->prepare('SELECT * FROM score WHERE tour_operator_id = ?');
      $prepareSQL->execute([$id]);

      
      $score = $prepareSQL->fetch(PDO::FETCH_ASSOC);
      
      $objectScore = new Score($score);

      return $objectScore;
    }


    public function ChangePrice($idTO, $nameOfLocation, $price)
    {
      $prepareSQL = $this->connexion->prepare('UPDATE destination SET price = ? WHERE tour_operator_id = ? AND location = ?');
      $prepareSQL->execute([
        $price,
        $idTO,
        $nameOfLocation
      ]);

    }


}