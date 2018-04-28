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
                <h2>
                    <a href="<?php echo $projectTitleLink[0]['projectTitleLink'];?>">
                        <?php echo $projectTitle[0]['projectTitle'];?>
                    </a>
                </h2>
                <a href="<?php echo $projectTitleLink[0]['projectTitleLink'];?>">
                    <img src="<?php echo $projectImage[0]['projectImage'];?>">
                </a>

            </div>

            <div class="col3 col2Sm">
                <h2>
                    <a href="<?php echo $projectTitleLink[1]['projectTitleLink'];?>">
                        <?php echo $projectTitle[1]['projectTitle'];?>
                    </a>
                </h2>
                <a href="<?php echo $projectTitleLink[1]['projectTitleLink'];?>">
                    <img src="<?php echo $projectImage[1]['projectImage'];?>">
                </a>
            </div>

            <div class="col3 col2Sm">
                <h2>
                    <a href="<?php echo $projectTitleLink[2]['projectTitleLink'];?>">
                        <?php echo $projectTitle[2]['projectTitle'];?>
                    </a>
                </h2>
                <a href="<?php echo $projectTitleLink[2]['projectTitleLink'];?>">
                    <img src="<?php echo $projectImage[2]['projectImage'];?>">
                </a>
            </div>

            <div class="col3 col2Sm">
                <h2>
                    <a href="<?php echo $projectTitleLink[3]['projectTitleLink'];?>">
                        <?php echo $projectTitle[3]['projectTitle'];?>
                    </a>
                </h2>
                <a href="<?php echo $projectTitleLink[3]['projectTitleLink'];?>">
                    <img src="<?php echo $projectImage[3]['projectImage'];?>">
                </a>
            </div>

            <div class="col3 col2Sm">
                <h2>
                    <a href="<?php echo $projectTitleLink[4]['projectTitleLink'];?>">
                        <?php echo $projectTitle[4]['projectTitle'];?>
                    </a>
                </h2>
                <a href="<?php echo $projectTitleLink[4]['projectTitleLink'];?>">
                    <img src="<?php echo $projectImage[4]['projectImage'];?>">
                </a>
            </div>

            <div class="col3 col2Sm">
                <h2>
                    <a href="<?php echo $projectTitleLink[5]['projectTitleLink'];?>">
                        <?php echo $projectTitle[5]['projectTitle'];?>
                    </a>
                </h2>
                <a href="<?php echo $projectTitleLink[5]['projectTitleLink'];?>">
                    <img src="<?php echo $projectImage[5]['projectImage'];?>">
                </a>
            </div>
        </main>

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
    </div>
</body>
</html>