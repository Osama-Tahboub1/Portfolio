<?php

$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

require_once 'functions.php';
$footerContent = getFooterContent($db);
$projectContent = getProjectContent($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <link type="text/css" rel="stylesheet" href="css/normalize.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/styles.css">
</head>

<!--[if lte IE 9]><body class="ieLegacy"><![endif]-->
<!--[if !IE]><body><![endif]-->

<body>
    <div>
        <header class="container">
            <nav class="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                </ul>
            </nav>

            <div  class="pageTitle modal-title">
                <h1>My Portfolio</h1>
            </div>
        </header>

        <main>
            <?php
            getPortfolio($projectContent);
            ?>
        </main>

        <footer>
            <?php echo $footerContent = getFooterContent($db);?>
        </footer>
    </div>
</body>
</html>