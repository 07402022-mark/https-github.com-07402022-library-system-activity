<?php

require_once __DIR__ . '/../Entity/Student.php';
require_once __DIR__ . '/../Entity/BorrowRecord.php';
require_once __DIR__ . '/../Repository/BookRepository.php';
require_once __DIR__ . '/../Repository/BorrowRepository.php';

class LibraryService
{
    private BookRepository $bookRepository;
    private BorrowRepository $borrowRepository;

    public function __construct()
    {
        $this->bookRepository = new BookRepository();
        $this->borrowRepository = new BorrowRepository();
    }

    public function getBooks(): array
    {
        return $this->bookRepository->getAll();
    }

    public function borrowBook(Student $student, int $bookId): string
    {
        $book = $this->bookRepository->findById($bookId);

        if ($book === null) {
            return 'Book not found.';
        }

        if (!$book->isAvailable()) {
            return 'Book is not available.';
        }

        $book->borrow();

        $record = new BorrowRecord($student, $book, date('Y-m-d'));
        $this->borrowRepository->add($record);

        return 'Book borrowed successfully.';
    }

    public function getBorrowRecords(): array
    {
        return $this->borrowRepository->getAll();
    }
}