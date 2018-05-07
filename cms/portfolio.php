<?php

$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

require_once 'functions.php';

    try {
        $loggedInStatus = loggedInStatus();
        if ($loggedInStatus !== true) {
            throw new Exception("Please login");
        } else {

            $projectInfo = getProjectInfo($db);

            $projectTitle = $_POST['projectTitle'];
            $projectTitleLink = $_POST['projectTitleLink'];
            $projectImage = $_POST['projectImage'];
            $projectId = $_POST['projectId'];

            if (isset($_POST['updatePortfolio']) && $projectTitle != NULL && $projectTitleLink != NULL && $projectImage != NULL && $projectId!= NULL) {
                updateProject($db, $projectTitle, $projectTitleLink, $projectImage, $projectId);
            } else {
                echo "all fields must be full to add a project";
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
                    <?php echo returnProjectInfo($projectInfo);?>
                </div>

                <div>
                    <h2>Update Projects</h2>
                    <form method="post" action="portfolio.php">
                        <p>Project ID</p>
                        <textarea name="projectId" cols="20" rows="5" maxlength="500"></textarea>
                        <p>Project Title</p>
                        <textarea name="projectTitle" cols="20" rows="5" maxlength="500"></textarea>
                        <p>Project Title Link</p>
                        <textarea name="projectTitleLink" cols="100" rows="5" maxlength="500"></textarea>
                        <p>Project Image</p>
                        <textarea name="projectImage" cols="100" rows="5" maxlength="500"></textarea>
                        <p></p>
                        <input type="submit" name="updatePortfolio" value="Update">
                    </form>
                </div>

                <div>
                    <?php echo getSignOutButton();?>
                </div>
            </body>
            </html>

            <?php

    }

    } catch (Exception $e) {
        echo 'Exception:', $e->getMessage();
    }

?>
