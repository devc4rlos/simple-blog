<?php

use Devc4rlos\SimpleBlog\Entity\Post;
use Devc4rlos\SimpleBlog\Repository\Post\PdoPostRepository;
use Devc4rlos\SimpleBlog\Service\PostService;

require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$postRepository = new PdoPostRepository();
$postService = new PostService($postRepository);

$title = readline('Title: ');
$content = readline('Content: ');
$author = readline('Author: ');

$post = new Post(
    title: $title,
    content: $content,
    author: $author,
    date: new DateTime()
);

$postService->create($post);

print_r($post);