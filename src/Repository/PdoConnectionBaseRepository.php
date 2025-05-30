<?php

namespace Devc4rlos\SimpleBlog\Repository;

use Devc4rlos\SimpleBlog\Bootstrap\PdoConnection;
use PDO;

abstract class PdoConnectionBaseRepository
{
    protected PDO $connection;

    public function __construct()
    {
        $this->connection = PdoConnection::connection();
    }
}