<?php

$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$projectTitleQuery = $db->prepare("SELECT `projectTitle` FROM `portfolio`");
$projectTitleQuery->execute();
$projectTitle = $projectTitleQuery->fetchAll();

$projectTitleLinkQuery = $db->prepare("SELECT `projectTitleLink` FROM `portfolio`");
$projectTitleLinkQuery->execute();
$projectTitleLink = $projectTitleLinkQuery->fetchAll();

$projectImageQuery = $db->prepare("SELECT `projectImage` FROM `portfolio`");
$projectImageQuery->execute();
$projectImage = $projectImageQuery->fetchAll();

$contactIconQuery = $db->prepare("SELECT `contactIcon` FROM `footer`");
$contactIconQuery->execute();
$contactIcon = $contactIconQuery->fetchAll();

$smallContactIconQuery = $db->prepare("SELECT `smallContactIcon` FROM `footer`");
$smallContactIconQuery->execute();
$smallContactIcon = $smallContactIconQuery->fetchAll();

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
                <h2><a href="<?php echo $projectTitleLink[0]['projectTitleLink'];?>">
                        <?php echo $projectTitle[0]['projectTitle'];?>
                    </a></h2>
                <img src="<?php echo $projectImage[0]['projectImage'];?>">
            </div>

            <div class="col3 col2Sm">
                <h2><a href="<?php echo $projectTitleLink[1]['projectTitleLink'];?>">
                        <?php echo $projectTitle[1]['projectTitle'];?>
                    </a></h2>
                <img src="<?php echo $projectImage[1]['projectImage'];?>">
            </div>

            <div class="col3 col2Sm">
                <h2><a href="<?php echo $projectTitleLink[2]['projectTitleLink'];?>">
                        <?php echo $projectTitle[2]['projectTitle'];?>
                    </a></h2>
                <img src="<?php echo $projectImage[2]['projectImage'];?>">
            </div>

            <div class="col3 col2Sm">
                <h2><a href="<?php echo $projectTitleLink[3]['projectTitleLink'];?>">
                        <?php echo $projectTitle[3]['projectTitle'];?>
                    </a></h2>
                <img src="<?php echo $projectImage[3]['projectImage'];?>">
            </div>

            <div class="col3 col2Sm">
                <h2><a href="<?php echo $projectTitleLink[4]['projectTitleLink'];?>">
                        <?php echo $projectTitle[4]['projectTitle'];?>
                    </a></h2>
                <img src="<?php echo $projectImage[4]['projectImage'];?>">
            </div>

            <div class="col3 col2Sm">
                <h2><a href="<?php echo $projectTitleLink[5]['projectTitleLink'];?>">
                        <?php echo $projectTitle[5]['projectTitle'];?>
                    </a></h2>
                <img src="<?php echo $projectImage[5]['projectImage'];?>">
            </div>
        </main>

        <footer class="container">
            <div class="contactIcon">
                <span>Contact me</span>
                <a href="mailto:<?php echo $contactEmail[0]['contactEmail'];?>?Subject=<?php echo $emailSubject[0]['emailSubject'];?>"></a>
                <img src="<?php echo $contactIcon[0]['contactIcon'];?>" alt="Email me icon">
            </div>

            <div class="contactIconSmall">
                <span>Contact me</span>
                <a href="mailto:<?php echo $contactEmail[0]['contactEmail'];?>?Subject=<?php echo $emailSubject[0]['emailSubject'];?>"></a>
                <img src="<?php echo $smallContactIcon[0]['smallContactIcon'];?>" alt="Email me icon">
            </div>
        </footer>
    </div>
</body>
</html>