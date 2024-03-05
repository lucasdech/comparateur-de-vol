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
      array_push($destinationArray, $destination);
    }

    return $destinationArray;
  }

  
  public function DestinationByCompanie(string $destination)
  {
    $prepareSQL = $this->connexion->prepare('SELECT * FROM destination 
                                                RIGHT JOIN tour_operator 
                                                  ON destination.tour_operator_id = tour_operator.id 
                                                WHERE destination.location = ?'
                                            );
    $prepareSQL->execute([$destination]);

    $destinations = $prepareSQL->fetchAll(PDO::FETCH_ASSOC);

    $array = [];

    foreach ($destinations as $key) {
      array_push($array, $key);
    }
    return $array;
  }

  
}