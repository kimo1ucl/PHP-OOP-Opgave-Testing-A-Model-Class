<?php
require_once 'Person.php';

class Student extends Person{

    private  $schoolclass;

    public function __construct($id,$firstname, $middlename, $lastname){
        parent::__construct($id, $firstname, $middlename, $lastname);
    }
    function __toString()
    {
        $rt =
        parent::getId().";".
        parent::getfirstname().";".
        parent::getmiddlename().";".
        parent::getlastname()."\n"; 

        return $rt;
    }
    public function addSchoolClass($schoolclass)
    {
        if (!$this->schoolclass == $schoolclass)
        {
            $this->schoolclass = $schoolclass; 
        }
        else{
            throw new Exception("this schoolclass is allready assigned this student".$schoolclass->__toString());
        }
               
        return $this;
    }

    public function removeSchoolClass($schoolclass)
    {
        if ($this->schoolclass == $schoolclass)
        {
            $this->schoolclass = null;           
        }
        else{
            throw new Exception("this schoolclass was not found assigned to this student".$schoolclass->__toString());
        }
               
        return $this;
    }

    public function getSchoolClass():object{
        return $this->schoolclass;
    }
}
