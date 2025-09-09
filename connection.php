<?php

class connection
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "katalogmusik";

    public function connect()
    {
        return new mysqli($this->hostname, $thiis->username, $this->password, $this->dbname);
    }
}
?>