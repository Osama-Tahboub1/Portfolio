<?php

$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `aboutMeArticle` FROM `aboutMe`;");
$query->execute();
$result = $query->fetchAll();

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
                <li><a href="index.html">Home</a></li>
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
                foreach ($result as $value) {
                    echo $value[aboutMeArticle];
                    echo '<p></p>';
                }
                ?>
            </p>
        </article>
    </section>

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
</body>
</html>