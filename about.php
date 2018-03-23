<?php

$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

require_once 'functions.php';
$aboutMeArticle = getAboutMeArticle($db);
$footerContent = getFooterContent($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Page</title>
    <link type="text/css" rel="stylesheet" href="normalize.css">
    <link type="text/css" rel="stylesheet" href="styles.css">
</head>

<!--[if lte IE 9]><body class="ieLegacy"><![endif]-->
<!--[if !IE]><body><![endif]-->

<body>
    <header class="container">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
            </ul>
        </nav>

        <h1>About Me</h1>
    </header>

    <section class="container aboutMe">
        <article>
            <p>
                <?php
                echo insertParagraph($aboutMeArticle);
                ?>
            </p>
        </article>
    </section>

    <footer class="container">
        <div class="contactIcon">
            <span>Contact me</span>
            <a href="mailto:<?php echo $footerContent[0]['contactEmail'];?>?Subject=<?php echo $emailSubject[0]['emailSubject'];?>"></a>
            <img src="<?php echo $footerContent[0]['contactIcon'];?>" alt="Email me icon">
            <a href="<?php echo $footerContent[0]['adminLoginLink'];?>"></a>
            <img src="<?php echo $footerContent[0]['adminLoginIcon'];?>">
        </div>

        <div class="contactIconSmall">
            <span>Contact me</span>
            <a href="mailto:<?php echo $footerContent[0]['contactEmail'];?>?Subject=<?php echo $emailSubject[0]['emailSubject'];?>"></a>
            <img src="<?php echo $footerContent[0]['smallContactIcon'];?>" alt="Email me icon">
        </div>
    </footer>
</body>
</html>