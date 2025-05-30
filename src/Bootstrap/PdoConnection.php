<?php

namespace Devc4rlos\SimpleBlog\Bootstrap;

use PDO;

class PdoConnection
{
    public static function connection(): PDO
    {
        $host = $_ENV['DATABASE_HOST'];
        $db = $_ENV['DATABASE_NAME'];
        $user = $_ENV['DATABASE_USER'];
        $pass = $_ENV['DATABASE_PASSWORD'];
        return new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    }
}