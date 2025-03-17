<?php
session_start();

if (!isset($_SESSION['student_loggedin']) || $_SESSION['student_loggedin'] !== true) {
    header("Location: student_parent_login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student/Parent Dashboard</title>
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
        <h2>Student/Parent Dashboard</h2>
        <ul>
            <li><a href="attendance_view.php">Attendance</a></li>
            <li><a href="marks_view.php">Marks</a></li>
            <li><a href="notifications_view.php">Notifications</a></li>
            <li><a href="remarks_view.php">Remarks</a></li>
        </ul>
    </main>
    <footer>
        <!-- Same footer as index.php -->
    </footer>
</body>
</html>