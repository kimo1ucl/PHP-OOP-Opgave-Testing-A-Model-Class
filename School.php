<?php
require_once 'Teacher.php';
require_once 'SchoolClass.php';
class School{

    public string $name;
    public string $adress;
    private $teachers = Array();
    private $students = Array();
    
    function __construct($name, $adress){
        $this->name = $name;
        $this->adress = $adress;
    }

    function addTeacher($id, $firstname, $middlename, $lastname, $salary):int{
        $rc = -1;
        $t = new Teacher($id, $firstname, $middlename, $lastname, $salary);
        
        if (!isset($this->teachers[$id])){
            $this->teachers[$id] = $t;   
            $rc = 0;
        }
        else{
            echo "this teacher is allready registered\n".$t->__toString(); 
        }        
        return $rc;
    }
    function removeTeacher($id):int{
        $rc = -1;
        if (isset($this->teachers[$id])){
            unset($this->teachers[$id]);   
            $rc = 0;
        }
        else{
            echo "no teacher with index $id was found\n";
        }
        return $rc;
    }
    function addStudent(){

    }
    function removeStudent(){

    }
    function addSchoolClass(){

    }
    function removeSchoolClass(){

    }
}

?>