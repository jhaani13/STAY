<?php
class Connection
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "stay2";

    public function connect()
    {
        return new mysqli($this->hostname, $this->username, $this->password, $this->database);
    }
}
?>