<?php

$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

require_once 'functions.php';

$paragraph = $_POST['paragraph'];
$paragraphId = $_POST['paragraphId'];

if ($paragraph != NULL && $paragraphId!= NULL) {
    $updatedInfo = updateParagraph($db, $paragraph, $paragraphId);
    //refresh page
} else {
    echo"all fields must be full to add a paragraph";
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
        <?php echo returnArticle($db);?>
    </div>


    <div>
        <h2>Update Paragraphs</h2>
        <form method="post" action="about.php">
            <p>Paragraph ID</p>
            <textarea name="paragraphId" cols="3" rows="2" maxlength="500"></textarea>
            <p>Paragraph</p>
            <textarea name="paragraph" cols="100" rows="5" maxlength="500"></textarea>
            <p></p>
            <input type="submit" value="Update">
        </form>
    </div>
</body>