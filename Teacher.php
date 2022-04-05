<?php
require_once 'Person.php';

Class Teacher extends Person{
    private float $salary;

    private $schoolclasses = Array();

    public function __construct($id,$firstname, $middlename, $lastname, $salary){
        parent::__construct($id, $firstname, $middlename, $lastname);
        if(isset($salary)){
            $this->salary = $salary;
        }
        else
        {
            $this->salary = 0;
        }
    }
    
    function getSchoolClass():Array{
        return $this->schoolclasses;
    }
    function addSchoolClass($schoolclass):object{

        $id = $schoolclass->GetId();
        if (!isset($this->schoolclasses[$id])){
            $this->schoolclasses[$id] = $schoolclass;  
        }
        else{
            throw new Exception("this schooclass has allready been to this teacher: ".$schoolclass->__toString()); 
        }        
        return $this;
    }

    function removeSchoolClass($schoolclass):object{
        $rc = -1;
        $id = $schoolclass->getId();
        if (isset($this->schoolclasses[$id])){
            unset($this->schoolclasses[$id]);   
            $rc = 0;
        }
        else{
            throw new Exception("this schoolclass was not found assigned to this teacher:".$schoolclass->__toString());
        }
        return $this;
    }


    function __toString()
    {
        $rt =
        parent::getId().";".
        parent::getfirstname().";".
        parent::getmiddlename().";".
        parent::getlastname().";".  
        (string) $this->salary."\n"; 

        return $rt;
    }

}