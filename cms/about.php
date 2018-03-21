<?php

$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$aboutMeArticleQuery = $db->prepare("SELECT `aboutMeArticle` FROM `aboutMe`;");
$aboutMeArticleQuery->execute();
$aboutMeArticle = $aboutMeArticleQuery->fetchAll();

/* Doc Block
 * Returns paragraph from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnParagraph(array $array): string{
    $paragraph = '';
    foreach ($array as $value) {
        $paragraph .= $value['aboutMeArticle'];
    }
    return $paragraph;
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
        <form method="post" action="admin.php">
            <textarea name="aboutMe"><?php echo returnParagraph($aboutMeArticle); ?></textarea>
            <input type="submit">
        </form>
    </div>
</body>
