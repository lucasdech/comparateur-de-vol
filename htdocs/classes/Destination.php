<?php


class Destination{

    private $id;
    private $location;
    private $price;



    // METHODE


    public function __construct(array $destination)
    {
        $this->hydrate($destination);
    }

    public function hydrate(array $destination)
    {
        foreach ($destination as $key => $value) {
            $method = 'set' . str_replace(' ', '', ucwords(str_replace('', ' ', $key)));
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
        return $method;
    }


    // GETTER & SETTER

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}