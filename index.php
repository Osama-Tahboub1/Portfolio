<?php

$db = new PDO('mysql:host=127.0.0.1; dbname=osama_CMS', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

require_once 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Osama's Portfolio</title>
    <link type="text/css" rel="stylesheet" href="css/normalize.css">
    <link type="text/css" rel="stylesheet" href="css/styles.css">
</head>

<!--[if gte IE 8]><body class="ieLegacy"><![endif]-->
<!--[if !IE]><body><![endif]-->
    <header class="container">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
            </ul>
        </nav>

        <div class="pageTitle homePageTitle">
            <h1>Osama Tahboub</h1>
            <em>Full stack developer</em>
        </div>
    </header>

    <footer class="container">
        <?php echo $footerContent = getFooterContent($db);?>
    </footer>
</body>
</html>