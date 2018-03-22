<?php

$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

require_once 'functions.php';

$projectInfo = getProjectInfo($db);

$projectTitle1 = $_POST['projectTitle1'];
$projectTitleLink1 =$_POST['projectTitleLink1'];
$projectImage1 = $_POST['projectImage1'];
$projectId1 = $_POST['projectId1'];

if ($projectTitle1 != NULL && $projectTitleLink1 != NULL && $projectImage1 != NULL && $projectId1!= NULL) {
    $updatedInfo = updateProject($db, $projectTitle1, $projectTitleLink1, $projectImage1, $projectId1);
    echo $updatedInfo;

}


$projectTitle2 = $_POST['projectTitle2'];
$projectTitleLink2 =$_POST['projectTitleLink2'];
$projectImage2 = $_POST['projectImage2'];
$projectId2 = $_POST['projectId2'];

if ($projectTitle2 != NULL && $projectTitleLink2 != NULL && $projectImage2 != NULL && $projectId2!= NULL) {
    $updatedInfo = updateProject($db, $projectTitle2, $projectTitleLink2, $projectImage2, $projectId2);
    echo $updatedInfo;

}

$projectTitle3 = $_POST['projectTitle3'];
$projectTitleLink3 =$_POST['projectTitleLink3'];
$projectImage3 = $_POST['projectImage3'];
$projectId3 = $_POST['projectId3'];

if ($projectTitle3 != NULL && $projectTitleLink3 != NULL && $projectImage3 != NULL && $projectId3!= NULL) {
    $updatedInfo = updateProject($db, $projectTitle3, $projectTitleLink3, $projectImage3, $projectId3);
    echo $updatedInfo;

}

$projectTitle4 = $_POST['projectTitle4'];
$projectTitleLink4 =$_POST['projectTitleLink4'];
$projectImage4 = $_POST['projectImage4'];
$projectId4 = $_POST['projectId4'];

if ($projectTitle4 != NULL && $projectTitleLink4 != NULL && $projectImage4 != NULL && $projectId4!= NULL) {
    $updatedInfo = updateProject($db, $projectTitle4, $projectTitleLink4, $projectImage4, $projectId4);
    echo $updatedInfo;

}

$projectTitle5 = $_POST['projectTitle5'];
$projectTitleLink5 =$_POST['projectTitleLink5'];
$projectImage5 = $_POST['projectImage5'];
$projectId5 = $_POST['projectId5'];

if ($projectTitle5 != NULL && $projectTitleLink5 != NULL && $projectImage5 != NULL && $projectId5!= NULL) {
    $updatedInfo = updateProject($db, $projectTitle5, $projectTitleLink5, $projectImage5, $projectId5);
    echo $updatedInfo;

}

$projectTitle6 = $_POST['projectTitle6'];
$projectTitleLink6 =$_POST['projectTitleLink6'];
$projectImage6 = $_POST['projectImage6'];
$projectId6 = $_POST['projectId6'];

if ($projectTitle6 != NULL && $projectTitleLink6 != NULL && $projectImage6 != NULL && $projectId6!= NULL) {
    $updatedInfo = updateProject($db, $projectTitle6, $projectTitleLink6, $projectImage6, $projectId6);
    echo $updatedInfo;

}

$projectTitle7 = $_POST['projectTitle7'];
$projectTitleLink7 =$_POST['projectTitleLink7'];
$projectImage7 = $_POST['projectImage7'];
$projectId7 = $_POST['projectId7'];

if ($projectTitle7 != NULL && $projectTitleLink7 != NULL && $projectImage7 != NULL && $projectId7!= NULL) {
    $updatedInfo = updateProject($db, $projectTitle7, $projectTitleLink7, $projectImage7, $projectId7);
    echo $updatedInfo;

}

$projectTitle8 = $_POST['projectTitle8'];
$projectTitleLink8 =$_POST['projectTitleLink8'];
$projectImage8 = $_POST['projectImage8'];
$projectId8 = $_POST['projectId8'];

if ($projectTitle8 != NULL && $projectTitleLink8 != NULL && $projectImage8 != NULL && $projectId8!= NULL) {
    $updatedInfo = updateProject($db, $projectTitle8, $projectTitleLink8, $projectImage8, $projectId8);
    echo $updatedInfo;

}

$projectTitle9 = $_POST['projectTitle9'];
$projectTitleLink9 =$_POST['projectTitleLink9'];
$projectImage9 = $_POST['projectImage9'];
$projectId9 = $_POST['projectId9'];

if ($projectTitle9 != NULL && $projectTitleLink9 != NULL && $projectImage9 != NULL && $projectId9!= NULL) {
    $updatedInfo = updateProject($db, $projectTitle9, $projectTitleLink9, $projectImage9, $projectId9);
    echo $updatedInfo;

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
            <p></p>
            <input type="submit" value="Update">
        </form>
    </div>

    <div>
        <h2>Project 2</h2>
        <form method="post" action="portfolio.php">
            <textarea name="projectId2" cols="20" rows="5" maxlength="500"><?php echo returnProjectId($projectInfo, 2); ?></textarea>
            <textarea name="projectTitle2" cols="20" rows="5" maxlength="500"><?php echo returnProjectTitle($projectInfo, 2); ?></textarea>
            <textarea name="projectTitleLink2" cols="100" rows="5" maxlength="500"><?php echo returnProjectTitleLink($projectInfo, 2); ?></textarea>
            <textarea name="projectImage2" cols="100" rows="5" maxlength="500"><?php echo returnProjectImage($projectInfo, 2); ?></textarea>
            <p></p>
            <input type="submit" value="Update">
        </form>
    </div>

    <div>
        <h2>Project 3</h2>
        <form method="post" action="portfolio.php">
            <textarea name="projectId3" cols="20" rows="5" maxlength="500"><?php echo returnProjectId($projectInfo, 3); ?></textarea>
            <textarea name="projectTitle3" cols="20" rows="5" maxlength="500"><?php echo returnProjectTitle($projectInfo, 3); ?></textarea>
            <textarea name="projectTitleLink3" cols="100" rows="5" maxlength="500"><?php echo returnProjectTitleLink($projectInfo, 3); ?></textarea>
            <textarea name="projectImage3" cols="100" rows="5" maxlength="500"><?php echo returnProjectImage($projectInfo, 3); ?></textarea>
            <p></p>
            <input type="submit" value="Update">
        </form>
    </div>

    <div>
        <h2>Project 4</h2>
        <form method="post" action="portfolio.php">
            <textarea name="projectId4" cols="20" rows="5" maxlength="500"><?php echo returnProjectId($projectInfo, 4); ?></textarea>
            <textarea name="projectTitle4" cols="20" rows="5" maxlength="500"><?php echo returnProjectTitle($projectInfo, 4); ?></textarea>
            <textarea name="projectTitleLink4" cols="100" rows="5" maxlength="500"><?php echo returnProjectTitleLink($projectInfo, 4); ?></textarea>
            <textarea name="projectImage4" cols="100" rows="5" maxlength="500"><?php echo returnProjectImage($projectInfo, 4); ?></textarea>
            <p></p>
            <input type="submit" value="Update">
        </form>
    </div>

    <div>
        <h2>Project 5</h2>
        <form method="post" action="portfolio.php">
            <textarea name="projectId5" cols="20" rows="5" maxlength="500"><?php echo returnProjectId($projectInfo, 5); ?></textarea>
            <textarea name="projectTitle5" cols="20" rows="5" maxlength="500"><?php echo returnProjectTitle($projectInfo, 5); ?></textarea>
            <textarea name="projectTitleLink5" cols="100" rows="5" maxlength="500"><?php echo returnProjectTitleLink($projectInfo, 5); ?></textarea>
            <textarea name="projectImage5" cols="100" rows="5" maxlength="500"><?php echo returnProjectImage($projectInfo, 5); ?></textarea>
            <p></p>
            <input type="submit" value="Update">
        </form>
    </div>

    <div>
        <h2>Project 6</h2>
        <form method="post" action="portfolio.php">
            <textarea name="projectId6" cols="20" rows="5" maxlength="500"><?php echo returnProjectId($projectInfo, 6); ?></textarea>
            <textarea name="projectTitle6" cols="20" rows="5" maxlength="500"><?php echo returnProjectTitle($projectInfo, 6); ?></textarea>
            <textarea name="projectTitleLink6" cols="100" rows="5" maxlength="500"><?php echo returnProjectTitleLink($projectInfo, 6); ?></textarea>
            <textarea name="projectImage6" cols="100" rows="5" maxlength="500"><?php echo returnProjectImage($projectInfo, 6); ?></textarea>
            <p></p>
            <input type="submit" value="Update">
        </form>
    </div>

    <div>
        <h2>Project 7</h2>
        <form method="post" action="portfolio.php">
            <textarea name="projectId7" cols="20" rows="5" maxlength="500"><?php echo returnProjectId($projectInfo, 7); ?></textarea>
            <textarea name="projectTitle7" cols="20" rows="5" maxlength="500"><?php echo returnProjectTitle($projectInfo, 7); ?></textarea>
            <textarea name="projectTitleLink7" cols="100" rows="5" maxlength="500"><?php echo returnProjectTitleLink($projectInfo, 7); ?></textarea>
            <textarea name="projectImage7" cols="100" rows="5" maxlength="500"><?php echo returnProjectImage($projectInfo, 7); ?></textarea>
            <p></p>
            <input type="submit" value="Update">
        </form>
    </div>

    <div>
        <h2>Project 8</h2>
        <form method="post" action="portfolio.php">
            <textarea name="projectId8" cols="20" rows="5" maxlength="500"><?php echo returnProjectId($projectInfo, 8); ?></textarea>
            <textarea name="projectTitle8" cols="20" rows="5" maxlength="500"><?php echo returnProjectTitle($projectInfo, 8); ?></textarea>
            <textarea name="projectTitleLink8" cols="100" rows="5" maxlength="500"><?php echo returnProjectTitleLink($projectInfo, 8); ?></textarea>
            <textarea name="projectImage8" cols="100" rows="5" maxlength="500"><?php echo returnProjectImage($projectInfo, 8); ?></textarea>
            <p></p>
            <input type="submit" value="Update">
        </form>
    </div>

    <div>
        <h2>Project 9</h2>
        <form method="post" action="portfolio.php">
            <textarea name="projectId9" cols="20" rows="5" maxlength="500"><?php echo returnProjectId($projectInfo, 9); ?></textarea>
            <textarea name="projectTitle9" cols="20" rows="5" maxlength="500"><?php echo returnProjectTitle($projectInfo, 9); ?></textarea>
            <textarea name="projectTitleLink9" cols="100" rows="5" maxlength="500"><?php echo returnProjectTitleLink($projectInfo, 9); ?></textarea>
            <textarea name="projectImage9" cols="100" rows="5" maxlength="500"><?php echo returnProjectImage($projectInfo, 9); ?></textarea>
            <p></p>
            <input type="submit" value="Update">
        </form>
    </div>
</body>
