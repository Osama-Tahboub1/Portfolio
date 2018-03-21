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
        <h2>Current Values</h2>
        <textarea name="projectId" cols="20" rows="10" maxlength="500"><?php echo returnProjectIds($projectInfo); ?></textarea>
        <textarea name="projectTitle" cols="20" rows="10" maxlength="500"><?php echo returnProjectTitles($projectInfo); ?></textarea>
        <textarea name="projectTitleLink" cols="100" rows="10" maxlength="500"><?php echo returnProjectTitleLinks($projectInfo); ?></textarea>
        <textarea name="projectImage" cols="100" rows="10" maxlength="500"><?php echo returnProjectImages($projectInfo); ?></textarea>
    </div>

    <div>
        <h2>Project 1</h2>

        <form method="post" action="portfolio.php">
            <textarea name="projectId1" cols="20" rows="5" maxlength="500"><?php echo returnProjectId($projectInfo, 1); ?></textarea>
            <textarea name="projectTitle1" cols="20" rows="5" maxlength="500"><?php echo returnProjectTitle($projectInfo, 1); ?></textarea>
            <textarea name="projectTitleLink1" cols="100" rows="5" maxlength="500"><?php echo returnProjectTitleLink($projectInfo,1); ?></textarea>
            <textarea name="projectImage1" cols="100" rows="5" maxlength="500"><?php echo returnProjectImage($projectInfo, 1); ?></textarea>
            <input type="submit" value="Update">
        </form>
    </div>

    <div>
        <h2>Project 2</h2>
        <form method="post" action="portfolio.php">
            <textarea name="projectId" cols="20" rows="5" maxlength="500"><?php echo returnProjectId($projectInfo, 2); ?></textarea>
            <textarea name="projectTitle" cols="20" rows="5" maxlength="500"><?php echo returnProjectTitle($projectInfo, 2); ?></textarea>
            <textarea name="projectTitleLink" cols="100" rows="5" maxlength="500"><?php echo returnProjectTitleLink($projectInfo, 2); ?></textarea>
            <textarea name="projectImage" cols="100" rows="5" maxlength="500"><?php echo returnProjectImage($projectInfo, 2); ?></textarea>
            <input type="submit" value="Update">
        </form>
    </div>

    <div>
        <h2>Project 3</h2>
        <form method="post" action="portfolio.php">
            <textarea name="projectId" cols="20" rows="5" maxlength="500"><?php echo returnProjectId($projectInfo, 3); ?></textarea>
            <textarea name="projectTitle" cols="20" rows="5" maxlength="500"><?php echo returnProjectTitle($projectInfo, 3); ?></textarea>
            <textarea name="projectTitleLink" cols="100" rows="5" maxlength="500"><?php echo returnProjectTitleLink($projectInfo, 3); ?></textarea>
            <textarea name="projectImage" cols="100" rows="5" maxlength="500"><?php echo returnProjectImage($projectInfo, 3); ?></textarea>
            <input type="submit" value="Update">
        </form>
    </div>

    <div>
        <h2>Project 4</h2>
        <form method="post" action="portfolio.php">
            <textarea name="projectId" cols="20" rows="5" maxlength="500"><?php echo returnProjectId($projectInfo, 4); ?></textarea>
            <textarea name="projectTitle" cols="20" rows="5" maxlength="500"><?php echo returnProjectTitle($projectInfo, 4); ?></textarea>
            <textarea name="projectTitleLink" cols="100" rows="5" maxlength="500"><?php echo returnProjectTitleLink($projectInfo, 4); ?></textarea>
            <textarea name="projectImage" cols="100" rows="5" maxlength="500"><?php echo returnProjectImage($projectInfo, 4); ?></textarea>

            <input type="submit" value="Update">
        </form>
    </div>

    <div>
        <h2>Project 5</h2>
        <form method="post" action="portfolio.php">
            <textarea name="projectId" cols="20" rows="5" maxlength="500"><?php echo returnProjectId($projectInfo, 5); ?></textarea>
            <textarea name="projectTitle" cols="20" rows="5" maxlength="500"><?php echo returnProjectTitle($projectInfo, 5); ?></textarea>
            <textarea name="projectTitleLink" cols="100" rows="5" maxlength="500"><?php echo returnProjectTitleLink($projectInfo, 5); ?></textarea>
            <textarea name="projectImage" cols="100" rows="5" maxlength="500"><?php echo returnProjectImage($projectInfo, 5); ?></textarea>
            <input type="submit" value="Update">
        </form>
    </div>

    <div>
        <h2>Project 6</h2>
        <form method="post" action="portfolio.php">
            <textarea name="projectId" cols="20" rows="5" maxlength="500"><?php echo returnProjectId($projectInfo, 6); ?></textarea>
            <textarea name="projectTitle" cols="20" rows="5" maxlength="500"><?php echo returnProjectTitle($projectInfo, 6); ?></textarea>
            <textarea name="projectTitleLink" cols="100" rows="5" maxlength="500"><?php echo returnProjectTitleLink($projectInfo, 6); ?></textarea>
            <textarea name="projectImage" cols="100" rows="5" maxlength="500"><?php echo returnProjectImage($projectInfo, 6); ?></textarea>
            <input type="submit" value="Update">
        </form>
    </div>

    <div>
        <h2>Project 7</h2>
        <form method="post" action="portfolio.php">
            <textarea name="projectId" cols="20" rows="5" maxlength="500"><?php echo returnProjectId($projectInfo, 7); ?></textarea>
            <textarea name="projectTitle" cols="20" rows="5" maxlength="500"><?php echo returnProjectTitle($projectInfo, 7); ?></textarea>
            <textarea name="projectTitleLink" cols="100" rows="5" maxlength="500"><?php echo returnProjectTitleLink($projectInfo, 7); ?></textarea>
            <textarea name="projectImage" cols="100" rows="5" maxlength="500"><?php echo returnProjectImage($projectInfo, 7); ?></textarea>
            <input type="submit" value="Update">
        </form>
    </div>

    <div>
        <h2>Project 8</h2>
        <form method="post" action="portfolio.php">
            <textarea name="projectId" cols="20" rows="5" maxlength="500"><?php echo returnProjectId($projectInfo, 8); ?></textarea>
            <textarea name="projectTitle" cols="20" rows="5" maxlength="500"><?php echo returnProjectTitle($projectInfo, 8); ?></textarea>
            <textarea name="projectTitleLink" cols="100" rows="5" maxlength="500"><?php echo returnProjectTitleLink($projectInfo, 8); ?></textarea>
            <textarea name="projectImage" cols="100" rows="5" maxlength="500"><?php echo returnProjectImage($projectInfo, 8); ?></textarea>
            <input type="submit" value="Update">
        </form>
    </div>

    <div>
        <h2>Project 9</h2>
        <form method="post" action="portfolio.php">
            <textarea name="projectId" cols="20" rows="5" maxlength="500"><?php echo returnProjectId($projectInfo, 9); ?></textarea>
            <textarea name="projectTitle" cols="20" rows="5" maxlength="500"><?php echo returnProjectTitle($projectInfo, 9); ?></textarea>
            <textarea name="projectTitleLink" cols="100" rows="5" maxlength="500"><?php echo returnProjectTitleLink($projectInfo, 9); ?></textarea>
            <textarea name="projectImage" cols="100" rows="5" maxlength="500"><?php echo returnProjectImage($projectInfo, 9); ?></textarea>
            <input type="submit" value="Update">
        </form>
    </div>
</body>
