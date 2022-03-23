<?php
require_once 'Person.php';

Class Student extends Person{
    private string $class;

    function __construct($firstname, $middlename, $lastname){
        parent::__construct($firstname, $middlename, $lastname);
    }

    public function __toString()
    {
        $rt =
              parent::getfirstname()."\n".
              parent::getmiddlename()."\n".
              parent::getlastname()."\n";  
        return $rt; 
    }

    public function addClass($classname)
    {
        $this->class = $classname;
    }
   
    public function removeClass($classname)
    {
        return $this->class;
    }

}
?>