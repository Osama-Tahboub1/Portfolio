<?php

$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

require_once 'functions.php';
$footerContent = getFooterContent($db);

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
    <div class="browsingIcons">
        <span>Contact me</span>
        <a href="mailto:<?php echo $contactEmail[0]['contactEmail'];?>?Subject=<?php echo $emailSubject[0]['emailSubject'];?>">
            <img src="<?php echo $contactIcon[0]['contactIcon'];?>" alt="Email me icon">
        </a>
        <a href="<?php echo $adminLoginLink[0]['adminLoginLink'];?>">
            <img src="<?php echo $adminLoginIcon[0]['adminLoginIcon'];?>" class="adminLinkIcon">
        </a>
    </div>

    <div class="contactIconSmall">
        <span>Contact me</span>
        <a href="mailto:<?php echo $footerContent[0]['contactEmail'];?>?Subject=<?php echo $footerContent[0]['emailSubject'];?>"></a>
        <img src="<?php echo $footerContent[0]['smallContactIcon'];?>" alt="Email me icon">
    </div>
</footer>
</body>
</html>