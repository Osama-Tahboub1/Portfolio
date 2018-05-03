<?php

$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$paragraphNumber =1;
$articleParagraphQuery = $db->prepare("SELECT `aboutMeArticle` FROM `aboutMe` WHERE `id` = :paragraphNumber;");
$articleParagraphQuery->bindParam (':paragraphNumber',$paragraphNumber);
$articleParagraphQuery->execute();
$articleParagraph = $articleParagraphQuery->fetchAll();

require_once 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Content Management System</title>
</head>
<body>
<?php echo returnArticle($db);
?>

<!--    <div>-->
<!--        <textarea name="id" cols="5" rows="2" maxlength="3" form="paragraph">--><?php //echo returnParagraph($aboutMeArticle, 1); ?><!--</textarea>-->
<!--        <textarea name="paragraph" cols="50" rows="15" maxlength="500" form="paragraph1">--><?php //echo returnParagraph($aboutMeArticle, 1); ?><!--</textarea>-->
<!--        <form method="post" action="admin.php" id="paragraph1">-->
<!--            <input type="submit">-->
<!--        </form>-->
<!--    </div>-->
<!--    <div>-->
<!--        <form method="post" action="admin.php">-->
<!--            <textarea name="paragraph2" cols="50" rows="15" maxlength="500">--><?php //echo returnParagraph($aboutMeArticle, 2); ?><!--</textarea>-->
<!--            <input type="submit">-->
<!--        </form>-->
<!--    </div>-->
<!--    <div>-->
<!--        <form method="post" action="admin.php">-->
<!--            <textarea name="paragraph3" cols="50" rows="15" maxlength="500">--><?php //echo returnParagraph($aboutMeArticle, 3); ?><!--</textarea>-->
<!--            <input type="submit">-->
<!--        </form>-->
<!--    </div>-->
<!--    <div>-->
<!--        <form method="post" action="admin.php">-->
<!--            <textarea name="paragraph4" cols="50" rows="15" maxlength="500">--><?php //echo returnParagraph($aboutMeArticle, 4); ?><!--</textarea>-->
<!--            <input type="submit">-->
<!--        </form>-->
<!--    </div>-->
</body>