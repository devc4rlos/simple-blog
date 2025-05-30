<?php

namespace Devc4rlos\SimpleBlog\Entity;

use DateTime;
use DateTimeInterface;
use InvalidArgumentException;

class Post
{
    private string $title;
    private string $content;
    private string $author;
    private DateTimeInterface $date;

    public function __construct(
        string $title,
        string $content,
        string $author,
        DateTimeInterface $date,
    )
    {
        $this->setTitle($title);
        $this->setContent($content);
        $this->setAuthor($author);
        $this->setDate($date);
    }

    public function title(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        if (empty($title) || mb_strlen($title) > 255) {
            throw new InvalidArgumentException("$title is not a valid title.");
        }
        $this->title = $title;
    }

    public function content(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        if (empty($content) || mb_strlen($content) > 65535) {
            throw new InvalidArgumentException("$content is not a valid content.");
        }
        $this->content = $content;
    }

    public function author(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): void
    {
        if (empty($author) || mb_strlen($author) > 255) {
            throw new InvalidArgumentException("$author is not a valid author.");
        }
        $this->author = $author;
    }

    public function date(): DateTimeInterface
    {
        return $this->date;
    }

    public function dateString(): string
    {
        return $this->date->format('Y-m-d H:i:s');
    }

    public function setDate(DateTimeInterface $date): void
    {
        $dateLessOneHors = new DateTime();
        $dateLessOneHors->modify('-1 hour');

        if ($date < $dateLessOneHors) {
            $dateString = $date->format('Y-m-d H:i:s');
            throw new InvalidArgumentException("$dateString is not a valid date.");
        }
        $this->date = $date;
    }
}