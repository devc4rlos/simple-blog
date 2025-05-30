<?php

use Devc4rlos\SimpleBlog\Entity\Post;
use Devc4rlos\SimpleBlog\Repository\Post\PdoPostRepository;
use Devc4rlos\SimpleBlog\Service\PostService;

$postRepository = new PdoPostRepository();
$postService = new PostService($postRepository);

$title = $_POST['title'] ?? false;
$content = $_POST['content'] ?? false;
$author = $_POST['author'] ?? false;

$post = new Post(
    title: $title,
    content: $content,
    author: $author,
    date: new DateTime()
);

$postService->create($post);