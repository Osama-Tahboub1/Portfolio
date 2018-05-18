<?php

require_once 'functions.php';

    $loggedInStatus = loggedInStatus();
    if ($loggedInStatus !== true) {
        header("Location: login.php");
    } else {

        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Content Management System</title>
        </head>
        <body>
        <nav>
            <ul>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="about.php">About Me</a></li>
                <li><a href="footer.php">Footer</a></li>
            </ul>
        </nav>

        <div>
            <?php echo getSignOutButton();?>
        </div>
        </body>
        </html>

        <?php
    }
?>

