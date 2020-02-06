<?php
    require "Pessoa.php";

    $person = new Pessoa;
    $person->setName("Andre");

    echo $person->getName();
?>