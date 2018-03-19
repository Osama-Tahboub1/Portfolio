<?php

$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$projectTitleQuery = $db->prepare("SELECT `projectTitle` FROM `portfolio`");
$projectTitleQuery->execute();
$projectTitle = $projectTitleQuery->fetchAll();

$projectTitleLinkQuery = $db->prepare("SELECT `projectTitleLink` FROM `portfolio`");
$projectTitleLinkQuery->execute();
$projectTitleLink = $projectTitleLinkQuery->fetchAll();

$projectImageQuery = $db->prepare("SELECT `projectImage` FROM `portfolio``");
$projectImageQuery->execute();
$projectImage = $projectTitleLinkQuery->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <link type="text/css" rel="stylesheet" href="normalize.css">
    <link type="text/css" rel="stylesheet" href="styles.css">
</head>

<!--[if lte IE 9]><body class="ieLegacy"><![endif]-->
<!--[if !IE]><body><![endif]-->

<body>
    <div>
        <header class="container">
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                </ul>
            </nav>

            <h1>My Portfolio</h1>
        </header>

        <main>
            <div class="col3 col2Sm">
                <h2><a href="https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/">
                        <?php
                        echo $projectTitle[0]['projectTitle'];
                        ?>
                    </a></h2>
                <img src="assets/PilotShop.png" alt="Portfolio sample image">
            </div>

            <div class="col3 col2Sm">
                <h2><a href="https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/">
                        <?php
                        echo $projectTitle[1]['projectTitle'];
                        ?>
                    </a></h2>
                <img src="assets/PilotShop.png" alt="Portfolio sample image">
            </div>

            <div class="col3 col2Sm">
                <h2><a href="#">
                        <?php
                        echo $projectTitle[2]['projectTitle'];
                        ?>
                    </a></h2>
                <img src="assets/PilotShop.png" alt="Portfolio sample image">
            </div>

            <div class="col3 col2Sm">
                <h2><a href="#">
                        <?php
                        echo $projectTitle[3]['projectTitle'];
                        ?>
                    </a></h2>
                <img src="assets/PilotShop.png" alt="Portfolio sample image">
            </div>

            <div class="col3 col2Sm">
                <h2><a href="#">
                        <?php
                        echo $projectTitle[4]['projectTitle'];
                        ?>
                    </a></h2>
                <img src="assets/PilotShop.png" alt="Portfolio sample image">
            </div>

            <div class="col3 col2Sm">
                <h2><a href="#">
                        <?php
                        echo $projectTitle[5]['projectTitle'];
                        ?>
                    </a></h2>
                <img src="assets/PilotShop.png" alt="Portfolio sample image">
            </div>
        </main>

        <footer class="container">
            <div class="contactIcon">
                <span>Contact me</span>
                <a href="mailto:o.tahboob2000@gmail.com?Subject=Portfolio%20Query"></a>
                <img src="assets/contactWhite.png" alt="Email me icon">
            </div>

            <div class="contactIconSmall">
                <span>Contact me</span>
                <a href="mailto:o.tahboob2000@gmail.com?Subject=Portfolio%20Query"></a>
                <img src="assets/contactWhiteSmall.png" alt="Email me icon">
            </div>
        </footer>
    </div>
</body>
</html>