<?php

abstract class Person{

    protected int $id;
    protected string $firstname;
    protected string $middlename;
    protected string $lastname;
    
    //Class constructor
    public function __construct($id,$firstname, $middlename, $lastname)
    {
        $this->id = $id; 
        $this->firstname = $firstname;
        $this->middlename = $middlename;
        $this->lastname = $lastname;
    }

    abstract public function addClass($classname);
    abstract public function removeClass($classname);
    abstract public function __ToString():string;

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getMiddlename()
    {
        return $this->middlename;
    }

    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;

        return $this;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }


   

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
}

?>