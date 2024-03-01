<?php


class TourOperateur{

    private int $id;
    private string $name;
    private string $link;
    private bool $certificate = false;
    private string $destinations;
    private string $reviews;
    private int $scores;



    // METHODE


    public function __construct(array $touroperateur)
    {
        $this->hydrate($touroperateur);
    }

    public function hydrate(array $touroperateur)
    {
        foreach ($touroperateur as $key => $value) {
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

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }

    public function getCertificate()
    {
        return $this->certificate;
    }

    public function setCertificate($certificate)
    {
        $this->certificate = $certificate;
    }

    public function getDestinations()
    {
        return $this->destinations;
    }

    public function setDestinations($destinations)
    {
        $this->destinations = $destinations;
    }

    public function getReview()
    {
        return $this->reviews;
    }

    public function setReview($reviews)
    {
        $this->reviews = $reviews;
    }
    
    public function getScores()
    {
        return $this->scores;
    }

    public function setScores($scores)
    {
        $this->scores = $scores;
    }
}