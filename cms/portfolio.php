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

/* Doc Block
 * Returns project titles from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnProjectTitle(array $array): string{
    $paragraph = '';
    foreach ($array as $value) {
        $paragraph .="<p>".$value['projectTitle']."</p>";
    }
    return $paragraph;
}

/* Doc Block
 * Returns project title link from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnProjectTitleLink(array $array): string{
    $paragraph = '';
    foreach ($array as $value) {
        $paragraph .= "<p>".$value['projectTitleLink']."</p>";
    }
    return $paragraph;
}

/* Doc Block
 * Returns project image link from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnProjectImage(array $array): string{
    $paragraph = '';
    foreach ($array as $value) {
        $paragraph .= $value['projectImage'];
    }
    return $paragraph;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
</head>
<body>

<h1>Portfolio</h1>

<div>
    <form method="post" action="admin.php">
        <textarea name="projectTitle"><?php echo returnProjectTitle($projectTitle); ?></textarea>
        <input type="submit">
    </form>

    <form method="post" action="admin.php">
        <input type="name" name="projectTitleLink" value="<?php echo returnProjectTitleLink($projectTitleLink); ?>">
        <input type="submit">
    </form>

    <form method="post" action="admin.php">
        <input type="name" name="projectImage" value="<?php echo returnProjectImage($projectImage); ?>">
        <input type="submit">
    </form>
</div>
