<h2>Borrow Records</h2>

<ul>
    <?php foreach ($records as $record): ?>
        <li>
            <?= htmlspecialchars($record->getStudent()->getName()); ?>
            borrowed
            <?= htmlspecialchars($record->getBook()->getTitle()); ?>
            on
            <?= htmlspecialchars($record->getBorrowDate()); ?>
        </li>
    <?php endforeach; ?>
</ul>