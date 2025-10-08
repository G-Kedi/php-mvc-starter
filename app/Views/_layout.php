<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title ?? 'MVC Starter') ?></title>
    <link rel="stylesheet" href="/public/css/style.css"> <!-- exemple CSS -->
</head>
<body>
    <header>
        <h1>My MVC Project</h1>
        <nav>
            <a href="/">Home</a> | 
            <a href="/users">Users</a>
        </nav>
    </header>

    <main>
        <?= $content ?? '' ?>
    </main>

    <footer>
        <p>&copy; <?= date('Y') ?> My MVC Project</p>
    </footer>
</body>
</html>
