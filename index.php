<?php
    require "Pessoa.php";
    require "Programmer.php";

    $person = new Programmer("Andre", "JavaScript");

    echo $person->getName()."<br />";
    echo $person::SPECIES."<br />";
    echo $person->getLanguage()."<br />";
?>