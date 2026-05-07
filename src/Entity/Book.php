<?php

class Book
{
    private int $id;
    private string $title;
    private string $author;
    private bool $available;

    public function __construct(int $id, string $title, string $author, bool $available = true)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

    public function getId(): int { return $this->id; }
    public function getTitle(): string { return $this->title; }
    public function getAuthor(): string { return $this->author; }
    public function isAvailable(): bool { return $this->available; }

    public function borrow(): void
    {
        $this->available = false;
    }

    public function returnBook(): void
    {
        $this->available = true;
    }
}