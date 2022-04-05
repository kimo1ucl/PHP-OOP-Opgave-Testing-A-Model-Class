<?php
 abstract class Person{
    private int $id;
    private string $firstname;
    private string $middlename;
    private string $lastname;

    public function __construct($id,$firstname, $middlename, $lastname){
        $this->id = $id;
        $this->firstname = $firstname;
        $this->middlename = $middlename;
        $this->lastname = $lastname;
    }

    public abstract function __ToString();
    public abstract function addSchoolClass($schoolclass);
    public abstract function removeSchoolClass($schoolclass);
    public abstract function GetSchoolClass();
     
    public function getId()
    {
        return $this->id;
    }
    public function getFirstname()
    {
        return $this->firstname;
    }
    public function getMiddlename()
    {
        return $this->middlename;
    }
    public function getLastname()
    {
        return $this->lastname;
    }
}