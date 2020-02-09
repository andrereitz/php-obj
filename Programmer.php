<?php

class Programmer extends Pessoa{
    public $programLanguages;
    
    public function __construct($startName, $startLanguage){
        $this->name = $startName;
        $this->programLanguages = $startLanguage;

        echo "<br /> The object ".__CLASS__." was created <br />";
    }

    public function getLanguage(){
        return $this->programLanguages;
    }
}