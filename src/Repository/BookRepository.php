<?php

require_once __DIR__ . '/../Entity/Book.php';

class BookRepository
{
    private array $books = [];

    public function __construct()
    {
        $this->books = [
            new Book(1, 'Clean Code', 'Robert C. Martin'),
            new Book(2, 'PHP for Beginners', 'John Smith'),
            new Book(3, 'Object-Oriented Programming', 'Jane Doe'),
        ];
    }

    public function getAll(): array
    {
        return $this->books;
    }

    public function findById(int $id): ?Book
    {
        foreach ($this->books as $book) {
            if ($book->getId() === $id) {
                return $book;
            }
        }

        return null;
    }
}