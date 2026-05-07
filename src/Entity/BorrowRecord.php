<?php

declare(strict_types=1);

namespace App\Library\Entity;

/**
 * Represents a borrow record.
 *
 * @author Your Name
 * @since 2026-05-07
 */
class BorrowRecord
{
    private int $studentId;

    private int $bookId;

    public function __construct(int $studentId, int $bookId)
    {
        $this->studentId = $studentId;
        $this->bookId = $bookId;
    }

    public function getStudentId(): int
    {
        return $this->studentId;
    }

    public function getBookId(): int
    {
        return $this->bookId;
    }
}