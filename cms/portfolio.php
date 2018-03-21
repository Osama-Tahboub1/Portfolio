<?php

$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$projectInfoQuery = $db->prepare("SELECT `id`, `projectTitle`, `projectTitleLink`,`projectImage` FROM `portfolio` ");
$projectInfoQuery->execute();
$projectInfo = $projectInfoQuery->fetchAll();

/* Doc Block
 * Returns project titles from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnProjectTitles(array $array): string{ // change title to record
    $titles = '';
    foreach ($array as $value) {
        $titles .=$value['projectTitle']."\n";
    }
    return $titles;
}

/* Doc Block
 * Returns project title link from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnProjectTitleLinks(array $array): string{
    $titlesLinks = '';
    foreach ($array as $value) {
        $titlesLinks .= $value['projectTitleLink']."\n";
    }
    return $titlesLinks;
}

/* Doc Block
 * Returns project image link from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnProjectImages(array $array): string{
    $projectImages = '';
    foreach ($array as $value) {
        $projectImages .= $value['projectImage']."\n";
    }
    return $projectImages;
}

/* Doc Block
 * Returns project image link from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnProjectIds(array $array): string{
    $projectIds = '';
    foreach ($array as $value) {
        $projectIds .= $value["id"]."\n";
    }
    return $projectIds;
}

/* Doc Block
 * Returns project titles from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnProjectTitle(array $array, int $recId): string{ // change title to record
    $index = $recId - 1;
    $projectTitleArray = $array[$index];
    $projectTitle = '';
    $projectTitle .=$projectTitleArray['projectTitle'];
    return $projectTitle;
}

/* Doc Block
 * Returns project title link from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnProjectTitleLink(array $array, int $recId): string{
    $index = $recId - 1;
    $projectTitleLinkArray = $array[$index];
    $projectTitleLink = '';
    $projectTitleLink .= $projectTitleLinkArray["projectTitleLink"];
    return $projectTitleLink;
}

/* Doc Block
 * Returns project image link from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnProjectImage(array $array, int $recId): string{
    $index = $recId - 1;
    $projectImageArray = $array[$index];
    $projectImage = '';
    $projectImage .= $projectImageArray['projectImage']."\n";
    return $projectImage;
}

/* Doc Block
 * Returns project image link from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnProjectId(array $array, int $recId){
    $index = $recId - 1;
    $projectIdArray = $array[$index];
    $projectId = '';
    $projectId .= $projectIdArray['id'];
    return $projectId;
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