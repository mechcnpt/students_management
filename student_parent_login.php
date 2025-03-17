<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student/Parent Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <!-- Same header as index.php -->
    </header>
    <nav>
        <!-- Same navigation as index.php -->
    </nav>
    <main>
        <h2>Student/Parent Login</h2>
        <form method="POST" action="student_parent_dashboard.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </main>
    <footer>
        <!-- Same footer as index.php -->
    </footer>
</body>
</html>