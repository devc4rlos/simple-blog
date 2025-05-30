<?php

use Devc4rlos\SimpleBlog\Migrations\CreatePostMigration;

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$createPost = new CreatePostMigration();

$createPost->handle();