<?php
require_once '../settings.php';
$db = new PDO("mysql:host=$dbHost; dbname=$dbName", "$dbUserName");
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

require_once 'functions.php';

    $loggedInStatus = loggedInStatus();
    if ($loggedInStatus !== true) {
        header("Location: login.php");
    } else {

        $paragraph = $_POST['paragraph'];
        $paragraphId = $_POST['paragraphId'];

        if (isset($_POST['updateParagraph']) && $paragraph !== NULL && $paragraphId !== NULL) {
            updateParagraph($db, $paragraph, $paragraphId);
        }

        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Content Management System</title>
        </head>
        <body>
        <div>
            <?php echo getArticle($db);?>
        </div>

        <div>
            <h2>Update Paragraphs</h2>
            <form method="post" action="about.php">
                <p>Paragraph ID</p>
                <textarea name="paragraphId" cols="3" rows="2" maxlength="500"></textarea>
                <p>Paragraph</p>
                <textarea name="paragraph" cols="100" rows="5" maxlength="500"></textarea>
                <p></p>
                <input type="submit" name="updateParagraph" value="update">
            </form>
        </div>

        <div>
            <?php echo getSignOutButton();?>
        </div>
        </body>
        </html>

        <?php
    }
?>



