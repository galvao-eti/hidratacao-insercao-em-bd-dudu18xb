<?php

class Database implements DB
{

    private $connection;

    public function __construct(string $user, string $pass, string $database, string $host, int $port)
    {
        $this->connection = new \PDO("mysql:host=$host;port=$port;dbname=$database;", $user, $pass);
    }
}
