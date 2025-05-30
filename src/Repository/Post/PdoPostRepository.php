<?php

namespace Devc4rlos\SimpleBlog\Repository\Post;

use Devc4rlos\SimpleBlog\Entity\Post;
use Devc4rlos\SimpleBlog\Repository\PdoConnectionBaseRepository;
use PDO;

class PdoPostRepository extends PdoConnectionBaseRepository implements PostRepositoryInterface
{
    public function create(Post $post): void
    {
        $query = <<<SQL
            INSERT INTO posts(title, content, author, date) VALUES(:title, :content, :author, :date)
        SQL;
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':title', $post->title());
        $stmt->bindValue(':content', $post->content());
        $stmt->bindValue(':author', $post->author());
        $stmt->bindValue(':date', $post->dateString());
        $stmt->execute();
    }

    public function list(): array
    {
        $query = <<<SQL
            SELECT * FROM posts
        SQL;
        $stmt = $this->connection->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}