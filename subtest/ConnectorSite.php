<?php

namespace Connector;

class ConnectorSite{
    protected $host;
    protected $password;
    const USER = 'andrereitz';

    public function __construct($initHost, $initPass){
        $this->host = $initHost;
        $this->password = $initPass;

        echo "got to the construct";
    }

    public function getData(){
        return $this;
    }
}