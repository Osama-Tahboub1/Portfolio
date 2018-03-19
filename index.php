<?php

$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$contactIconQuery = $db->prepare("SELECT `contactIcon` FROM `footer`");
$contactIconQuery->execute();
$contactIcon = $contactIconQuery->fetchAll();

$contactEmailQuery = $db->prepare("SELECT `contactEmail` FROM `footer`");
$contactEmailQuery->execute();
$contactEmail = $contactEmailQuery->fetchAll();

$emailSubjectQuery = $db->prepare("SELECT `emailSubject` FROM `footer`");
$emailSubjectQuery->execute();
$emailSubject = $emailSubjectQuery->fetchAll();

$adminLoginIconQuery = $db->prepare("SELECT `adminLoginIcon` FROM `footer`");
$adminLoginIconQuery->execute();
$adminLoginIcon = $adminLoginIconQuery->fetchAll();

$adminLoginLinkQuery = $db->prepare("SELECT `adminLoginLink` FROM `footer`");
$adminLoginLinkQuery->execute();
$adminLoginLink = $adminLoginLinkQuery->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<head>
    <title>Osama's Portfolio</title>
    <link type="text/css" rel="stylesheet" href="normalize.css">
    <link type="text/css" rel="stylesheet" href="styles.css">
</head>

<!--[if lte IE 9]><body class="ieLegacy"><![endif]-->
<!--[if !IE]><body><![endif]-->

<header class="container">
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
        </ul>
    </nav>

    <h1 class="homePageTitle">Osama's Portfolio</h1>
</header>

<footer class="container">
    <div class="contactIcon">
        <span>Contact me</span>
        <a href="mailto:o.tahboob2000@gmail.com?Subject=Portfolio%20Query"></a>
        <img src="assets/contactWhite.png" alt="Email me icon">
    </div>

    <div class="contactIconSmall">
        <span>Contact me</span>
        <a href="mailto:o.tahboob2000@gmail.com?Subject=&quot; &quot;"></a>
        <img src="assets/contactWhiteSmall.png" alt="Email me icon">
    </div>
</footer>
</body>
</html>