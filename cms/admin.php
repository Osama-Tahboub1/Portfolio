<?php

session_start();
if ($_SESSION['loggedIn'] !== true) {
    header('Location: instructions.php');
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Content Management System</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="portfolio.php">Portfolio</a></li>
    </ul>
</nav>
</body>
