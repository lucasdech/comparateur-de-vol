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

    

  
}