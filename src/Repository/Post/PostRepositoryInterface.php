<?php

namespace Devc4rlos\SimpleBlog\Repository\Post;

use Devc4rlos\SimpleBlog\Entity\Post;

interface PostRepositoryInterface
{
    public function create(Post $post);
    public function list(): array;
}