<?php

$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$aboutMeArticleQuery = $db->prepare("SELECT `aboutMeArticle` FROM `aboutMe`;");
$aboutMeArticleQuery->execute();
$aboutMeArticle = $aboutMeArticleQuery->fetchAll();

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

/* Doc Block
 * Adds paragraph from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function insertParagraph(array $array): string{
    $paragraph = '';
    foreach ($array as $value) {
        $paragraph .= '<p>'.$value['aboutMeArticle'].'</p>';
    }
    return $paragraph;
}
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
            <a href="mailto:<?php echo $contactEmail[0]['contactEmail'];?>?Subject=<?php echo $emailSubject[0]['emailSubject'];?>"></a>
            <img src="<?php echo $smallContactIcon[0]['smallContactIcon'];?>" alt="Email me icon">
        </div>
    </footer>
</body>
</html>