<?php

namespace App\Core;

use PDO;

class Connection
{


    private $user;
    private $password;
    private $host;
    private $database;


    public function __construct()
    {
        $this->user = $_ENV['USER_DATABASE'];
        $this->password = $_ENV['USER_PASSWORD'];
        $this->host = $_ENV['HOST_DATABASE'];
        $this->database = $_ENV['NAME_DATABASE'];
    }

    public function connect()
    {
        $path = __DIR__ . "/../database/api.db";
        return new PDO("sqlite:{$path}");
    }

}