<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: class_incharge_login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Incharge Dashboard</title>
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
        <h2>Class Incharge Dashboard</h2>
        <ul>
            <li><a href="student_data_entry.php">Student Data Entry</a></li>
            <li><a href="student_count.php">Student Count</a></li>
            <li><a href="attendance_entry.php">Attendance Entry</a></li>
            <li><a href="mark_entry.php">Mark Entry</a></li>
        </ul>
    </main>
    <footer>
        <!-- Same footer as index.php -->
    </footer>
</body>
</html>