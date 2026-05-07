<h2>Book List</h2>

<ul>
    <?php foreach ($books as $book): ?>
        <li>
            <?= htmlspecialchars($book->getTitle()); ?>
            by
            <?= htmlspecialchars($book->getAuthor()); ?>
            -
            <?= $book->isAvailable() ? 'Available' : 'Borrowed'; ?>
        </li>
    <?php endforeach; ?>
</ul>