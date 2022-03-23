<?php
require_once 'Person.php';

Class Teacher extends Person
{
    private $class = Array();
    private float $salary;
    
    function __construct($id, $firstname, $middlename, $lastname, $salary){
        parent::__construct($id, $firstname, $middlename, $lastname);
        if (isset($salary)){
            $this->salary = $salary;
        }
        else{
            $this->salary = 0;
        }
    }

    public function __toString()
    {
        $rt =
              parent::getId()."\n".
              parent::getfirstname()."\n".
              parent::getmiddlename()."\n".
              parent::getlastname()."\n".  
              (string) $this->salary."\n";  

        return $rt; 
    }

    //TODO: 
    //logic (returncode) to signal if succesfull
    //- if class allready registered, no change
    public function addClass($classname)
    {
        array_push($this->class ,$classname);
    }
    //TODO
    // remove the class if found
    public function removeClass($classname)
    {
        
    }

    //returning a string formatted as csv
    public function getClass():string
    {
        $s="";
        foreach ($this->class as $class)
        {   
            $s .= $class.";";
        }
        return $s;
    }
    public function getSalary()
    {
        // do some security stuff
        return $this->salary;
    }
    public function setSalary($salary)
    {
        // do some security stuff
        $this->salary = $salary;
        return $this;
    }
}
?>