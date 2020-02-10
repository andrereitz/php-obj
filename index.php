<?php
    require "Pessoa.php";
    require "Programmer.php";
    require "connectDatabase.php";
    require "connectSite.php";
    require "subtest/ConnectorSite.php";

    $person = new Programmer("Andre", "JavaScript");

    echo $person->getName()."<br />";
    echo $person::SPECIES."<br />";
    echo $person->getLanguage()."<br />";

    Website\connect();

    echo "<br /><br />Trying connection: <br />";
    echo "Namespace testing <br />";
    $connector = new Connector\ConnectorSite("test host", "test pass");
    var_dump($connector->getData());
?>