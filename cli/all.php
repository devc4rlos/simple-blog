<?php

use Devc4rlos\SimpleBlog\Repository\Post\PdoPostRepository;
use Devc4rlos\SimpleBlog\Service\PostService;

require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$postRepository = new PdoPostRepository();
$postService = new PostService($postRepository);

$list = $postService->list();

foreach ($list as $post) {
    print_r($post);
    echo "\n";
}