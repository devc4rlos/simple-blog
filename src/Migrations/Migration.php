<?php

namespace Devc4rlos\SimpleBlog\Migrations;

use Devc4rlos\SimpleBlog\Bootstrap\PdoConnection;
use PDO;

abstract class Migration
{
    protected PDO $connection;

    public function __construct()
    {
        $this->connection = PdoConnection::connection();
    }
}