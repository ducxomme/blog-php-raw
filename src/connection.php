<?php

require './constant.php';

class Connection {
    /** @var false|mysqli */
    private $connection;

    public function __construct()
    {
        $this->connection = new mysqli(HOSTNAME, USERNAME, PASSWORD);
    }

    public function checkConnect()
    {
        return $this->connection->connect_errno;
    }

    public function disconnect()
    {
        return mysqli_close($this->connection);
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
