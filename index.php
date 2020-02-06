<?php
    require "Pessoa.php";

    $uma_pessoa = new Pessoa;
    $uma_pessoa->setName("Andre");

    echo $uma_pessoa->getName();
?>