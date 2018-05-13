<?php
$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

require_once 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Content Management System</title>
</head>
<body>
<div>
    <?php echo getFooter($db);?>
</div>


<div>
    <h2>Update Footer Links</h2>
    <form method="post" action="footer.php">
        <p>Email</p>
        <textarea name="emailLink" cols="50" rows="2" maxlength="500"></textarea>
        <p></p>
        <input type="submit" value="Update">
    </form>
    <form method="post" action="footer.php">
        <p>Github Account Link</p>
        <textarea name="githubLink" cols="50" rows="2" maxlength="500"></textarea>
        <p></p>
        <input type="submit" value="Update">
    </form>
</div>
</body>