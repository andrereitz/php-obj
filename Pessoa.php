<?php
class Pessoa{
    //public, private or protected
    protected $name;
    const SPECIES = "Human";

    public function __construct($startName){
        $this->name = $startName;
    }

    public function setName($newName){
        $this->name = $newName;
    }

    public function getName(){
        return $this->name;
    }
}
?>