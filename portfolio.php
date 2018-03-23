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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                </ul>
            </nav>

            <h1>My Portfolio</h1>
        </header>

        <main>
            <div class="col3 col2Sm">
                <h2><a href="<?php echo $projectContent[0]['projectTitleLink'];?>">
                        <?php echo $projectContent[0]['projectTitle'];?>
                    </a></h2>
                <img src="<?php echo $projectContent[0]['projectImage'];?>">
            </div>

            <div class="col3 col2Sm">
                <h2><a href="<?php echo $projectContent[1]['projectTitleLink'];?>">
                        <?php echo $projectContent[1]['projectTitle'];?>
                    </a></h2>
                <img src="<?php echo $projectContent[1]['projectImage'];?>">
            </div>

            <div class="col3 col2Sm">
                <h2><a href="<?php echo $projectContent[2]['projectTitleLink'];?>">
                        <?php echo $projectContent[2]['projectTitle'];?>
                    </a></h2>
                <img src="<?php echo $projectContent[2]['projectImage'];?>">
            </div>

            <div class="col3 col2Sm">
                <h2><a href="<?php echo $projectContent[3]['projectTitleLink'];?>">
                        <?php echo $projectContent[3]['projectTitle'];?>
                    </a></h2>
                <img src="<?php echo $projectContent[3]['projectImage'];?>">
            </div>

            <div class="col3 col2Sm">
                <h2><a href="<?php echo $projectContent[4]['projectTitleLink'];?>">
                        <?php echo $projectContent[4]['projectTitle'];?>
                    </a></h2>
                <img src="<?php echo $projectContent[4]['projectImage'];?>">
            </div>

            <div class="col3 col2Sm">
                <h2><a href="<?php echo $projectContent[5]['projectTitleLink'];?>">
                        <?php echo $projectContent[5]['projectTitle'];?>
                    </a></h2>
                <img src="<?php echo $projectContent[5]['projectImage'];?>">
            </div>
        </main>

        <footer class="container">
            <div class="contactIcon">
                <span>Contact me</span>
                <a href="mailto:<?php echo $footerContent[0]['contactEmail'];?>?Subject=<?php echo $footerContent[0]['emailSubject'];?>"></a>
                <img src="<?php echo $footerContent[0]['contactIcon'];?>" alt="Email me icon">
                <a href="<?php echo $footerContent[0]['adminLoginLink'];?>"></a>
                <img src="<?php echo $footerContent[0]['adminLoginIcon'];?>">
            </div>

            <div class="contactIconSmall">
                <span>Contact me</span>
                <a href="mailto:<?php echo $footerContent[0]['contactEmail'];?>?Subject=<?php echo $footerContent[0]['emailSubject'];?>"></a>
                <img src="<?php echo $footerContent[0]['smallContactIcon'];?>" alt="Email me icon">
            </div>
        </footer>
    </div>
</body>
</html>