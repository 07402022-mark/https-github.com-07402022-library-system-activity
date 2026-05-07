<?php

require_once __DIR__ . '/../src/Service/LibraryService.php';

$service = new LibraryService();
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $studentName = $_POST['student_name'] ?? '';
    $course = $_POST['course'] ?? '';
    $bookId = (int) ($_POST['book_id'] ?? 0);

    $student = new Student(1, $studentName, $course);
    $message = $service->borrowBook($student, $bookId);
}

$books = $service->getBooks();
$records = $service->getBorrowRecords();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Library System</title>
</head>
<body>
    <h1>Library System</h1>

    <?php if ($message !== ''): ?>
        <p><strong><?= htmlspecialchars($message); ?></strong></p>
    <?php endif; ?>

    <?php include __DIR__ . '/../src/View/borrow_form.php'; ?>
    <?php include __DIR__ . '/../src/View/book_list.php'; ?>
    <?php include __DIR__ . '/../src/View/report_view.php'; ?>
</body>
</html>