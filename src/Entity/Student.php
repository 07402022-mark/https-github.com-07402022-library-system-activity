<?php

class Student
{
    private int $id;
    private string $name;
    private string $course;

    public function __construct(int $id, string $name, string $course)
    {
        $this->id = $id;
        $this->name = $name;
        $this->course = $course;
    }

    public function getId(): int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getCourse(): string { return $this->course; }
}