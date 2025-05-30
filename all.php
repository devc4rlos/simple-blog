<?php

use Devc4rlos\SimpleBlog\Repository\Post\PdoPostRepository;
use Devc4rlos\SimpleBlog\Service\PostService;

$postRepository = new PdoPostRepository();
$postService = new PostService($postRepository);

$list = $postService->list();

echo json_encode($list);