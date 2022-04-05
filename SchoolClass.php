<?php

class SchoolClass{

    private int $id;
    private string $name;

    function __construct ($id,$name)
    {
        $this->id = $id; 
        $this->name = $name; 
    }

    function __toString()
    {
        $rt ="";
        $rt = $this->id.";".$this->name."\n";
        return $rt;
    }

    /**
     * Get the value of id
     */ 
    public function getId():int
    {
        return $this->id;
    }
    public function getName():string{
        return $this->name;
    }
    public function setName($name):void{
        $this->name = $name;
    }
}