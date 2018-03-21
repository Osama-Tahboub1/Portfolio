<?php

$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

function updateProject1($db) {
$projectTitle1 = $_POST['projectTitle1'];
$projectTitleLink1 =$_POST['projectTitleLink1'];
$projectImage1 = $_POST['projectImage1'];
$projectId1 = $_POST['projectId1'];

$query = $db->prepare("UPDATE `portfolio` SET `projectTitle` = :projectTitle, `projectImage` = :projectTitleLink, `projectTitleLink` = :projectImage WHERE `id` = :projectId");

$query->bindParam (':projectTitle',$projectTitle1);
$query->bindParam (':projectTitleLink',$projectTitleLink1);
$query->bindParam (':projectImage',$projectImage1);
$query->bindParam (':projectId',$projectId1);



$query->execute();
}

$projectInfoQuery = $db->prepare("SELECT `id`, `projectTitle`, `projectTitleLink`,`projectImage` FROM `portfolio` ");
$projectInfoQuery->execute();
$projectInfo = $projectInfoQuery->fetchAll();

require_once 'functions.php';

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
            <p></p>
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
            <p></p>
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
            <p></p>
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
            <p></p>
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
            <p></p>
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
            <p></p>
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
            <p></p>
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
            <p></p>
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
            <p></p>
            <input type="submit" value="Update">
        </form>
    </div>
</body>
