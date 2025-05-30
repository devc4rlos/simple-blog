<?php

require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/all') {
    require_once 'all.php';
} else if ($uri === '/create') {
    require_once 'create.php';
} else {
    phpinfo();
}
