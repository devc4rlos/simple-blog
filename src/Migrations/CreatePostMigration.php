<?php

namespace Devc4rlos\SimpleBlog\Migrations;

class CreatePostMigration extends Migration
{
    public function handle(): void
    {
        $query = <<<SQL
            CREATE TABLE IF NOT EXISTS posts(
                id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                title VARCHAR(255) NOT NULL,
                content TEXT NOT NULL,
                author VARCHAR(255) NOT NULL,
                date DATETIME NOT NULL
            ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
        SQL;

        $this->connection->query($query);
    }
}