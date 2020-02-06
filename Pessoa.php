<?php
class Pessoa{
    //public, private or protected
    private $nome;

    public function setName($newName){
        $this->nome = $newName;
    }

    public function getName(){
        return $this->nome;
    }
}
?>