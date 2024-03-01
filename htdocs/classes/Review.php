<?php


class Review{

    private int $id;
    private string $message;
    private string $author;



    // METHODE


    public function __construct(array $review)
    {
        $this->hydrate($review);
    }

    public function hydrate(array $review)
    {
        foreach ($review as $key => $value) {
            $method = 'set' . str_replace(' ', '', ucwords(str_replace('', ' ', $key)));
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
        return $method;
    }


    // GETTER

    public function getId()
    {
        return $this->id;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getMessage()
    {
        return $this->message;
    }

    // SETTER 

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }
 
}