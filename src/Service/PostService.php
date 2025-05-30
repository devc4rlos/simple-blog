<?php

namespace Devc4rlos\SimpleBlog\Service;

use Devc4rlos\SimpleBlog\Entity\Post;
use Devc4rlos\SimpleBlog\Repository\Post\PostRepositoryInterface;

class PostService
{
    private PostRepositoryInterface $repository;

    public function __construct(PostRepositoryInterface $repository)
    {

        $this->repository = $repository;
    }

    public function create(Post $post): void
    {
        $this->repository->create($post);
    }

    public function list(): array
    {
        return $this->repository->list();
    }
}