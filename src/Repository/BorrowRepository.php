<?php

require_once __DIR__ . '/../Entity/BorrowRecord.php';

class BorrowRepository
{
    private array $records = [];

    public function add(BorrowRecord $record): void
    {
        $this->records[] = $record;
    }

    public function getAll(): array
    {
        return $this->records;
    }
}