<?php
require_once 'settings.php';
$db = new PDO("mysql:host=$dbHost; dbname=$dbName", $dbUserName);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

require_once 'functions.php';
$footerContent = getFooterContent($db);
$projectContent = getProjectContent($db);

?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link type="text/css" rel="stylesheet" href="css/normalize.css">
    <link type="text/css" rel="stylesheet" href="css/styles.css">
</head>

<!--[if gte IE 8]><body class="ieLegacy"><![endif]-->
<!--[if !IE]><body><![endif]-->
    <div>
        <header class="container">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                </ul>
            </nav>

            <div  class="pageTitle">
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