<?php
require_once 'Teacher.php';
require_once 'Student.php';
require_once 'SchoolClass.php';
class School{

    private int $id;
    private string $name;
    private string $adress;

    private $schoolclasses = Array();
    private $teachers = Array();
    private $students = Array();

    function __construct ($id,$name,$adress)
    {
        $this->id = $id; 
        $this->name = $name;
        $this->adress = $adress;  
    }

    function __toString()
    {
        $rt ="";
        $rt = $this->id.";".$this->name.";".$this->adress."\n";
        return $rt;
    }
    function getStudents():Array{
        return $this->students;
    }

    function addStudent($id, $firstname, $middlename, $lastname):int{
        $rc = -1;
        $t = new Student($id, $firstname, $middlename, $lastname);
        if (!isset($this->students[$id])){
            $this->students[$id] = $t;   
            $rc = 0;
        }
        else{
            echo "this student is allready registered\n".$t->__toString(); 
        }        
        return $rc;
    }

    function removeStudent($student):int{
        $rc = -1;
        $id = $student->getId();
        if (isset($this->students[$id])){
            unset($this->students[$id]);   
            $rc = 0;
        }
        else{
            echo "no students with index $id was found\n";
        }
        return $rc;
    }

    function getTeachers():Array{
        return $this->teachers;
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

    function removeTeacher($teacher):int{
        $rc = -1;
        $id = $teacher->getId();
        if (isset($this->teachers[$id])){
            unset($this->teachers[$id]);   
            $rc = 0;
        }
        else{
            echo "no teachers with index $id was found\n";
        }
        return $rc;
    }

    function getSchoolClasses():Array{
        return $this->schoolclasses;
    }

    function addSchoolClass($id, $name):int{
        $rc = -1;
        $sc = new SchoolClass($id, $name);
        if (!isset($this->schoolclasses[$id])){
            $this->schoolclasses[$id] = $sc;   
            $rc = 0;
        }
        else{
            echo "this schoolclass is allready registered\n".$sc->__toString(); 
        }        
        return $rc;
    }

    function removeSchoolClass($schoolclass):int{
        $rc = -1;
        $id = $schoolclass->getId();
        if (isset($this->schoolclasses[$id])){
            unset($this->schoolclasses[$id]);   
            $rc = 0;
        }
        else{
            echo "no schoolclass with index $id was found\n";
        }
        return $rc;
    }






}