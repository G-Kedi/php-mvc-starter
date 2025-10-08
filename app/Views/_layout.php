<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title ?? 'MVC Starter') ?></title>
    <link rel="stylesheet" href="../../public/css/output.css">
</head>
<body>

<?php include __DIR__ . '/partials/header.php'; ?>

<main>
    <?= $content ?? '' ?>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>

</body>
</html>
