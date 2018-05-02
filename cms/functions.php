<?php

/*
 * Returns all project titles from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return returns a form that contains values in the array provided.
 */
function returnProjectInfo(array $projectInfoArray):string {

    $ids = '';
    foreach ($projectInfoArray as $value) {
        $ids .= $value["id"]."\n";
    }

    $titles = '';
    foreach ($projectInfoArray as $value) {
        $titles .=$value['projectTitle']."\n";
    }

    $titleLinks = '';
    foreach ($projectInfoArray as $value) {
        $titleLinks .= $value['projectTitleLink']."\n";
    }

    $Images = '';
    foreach ($projectInfoArray as $value) {
        $Images .= $value['projectImage']."\n";
    }

    $form = "
    <div>
        <h2>Current Values</h2>
        <textarea name=\"projectId\" cols=\"20\" rows=\"10\" maxlength=\"500\">".$ids."</textarea>
        <textarea name=\"projectTitle\" cols=\"20\" rows=\"10\" maxlength=\"500\">".$titles."</textarea>
        <textarea name=\"projectTitleLink\" cols=\"100\" rows=\"10\" maxlength=\"500\">".$titleLinks."</textarea>
        <textarea name=\"projectImage\" cols=\"100\" rows=\"10\" maxlength=\"500\">".$Images."</textarea>
    </div>
    ";

    return $form;
}

/*
 * Returns article from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnArticle(array $aboutMeArray):string {
    $article = '';

    foreach ($aboutMeArray as $value) {
        $article .= $value['aboutMeArticle']."\n"."\n";
    }
    return $article;
}

/*
 * Returns single paragraph from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnParagraph(array $paragraphArray, int $id):string {
    $index = $id - 1;
    return $paragraphArray[$index]['aboutMeArticle'].'';
}

/*
 * Returns an associative array with content from portfolio table from database.
 *
 * @param $db object database link and credentials PDO object.
 *
 * @return array returns associative array with arrays containing content from portfolio table from database.
 */
function getProjectInfo(PDO $db):array {
    $projectInfoQuery = $db->prepare("SELECT `id`, `projectTitle`, `projectTitleLink`,`projectImage` FROM `portfolio` ");
    $projectInfoQuery->execute();
    return $projectInfo = $projectInfoQuery->fetchAll();
}

/*
 * Updates the values of a row in portfolio table in database.
 *
 * @param $db object database link and credentials PDO object.
 * @param $projectTitle string used with post from form and passed in to update the portfolio table in database.
 * @param $projectTitleLink string used with post from form and passed in to update the portfolio table in database.
 * @param $projectImage string object used with post from form and passed in to update the portfolio table in database.
 * @param $projectId string used with post from form and passed in to update the portfolio table in database.
 *
 * @return array returns associative array with arrays containing content from portfolio table from database.
 */
function updateProject(PDO $db, string $projectTitle, string $projectTitleLink, string $projectImage, string $projectId)
{
    $query = $db->prepare("UPDATE `portfolio` SET `projectTitle` = :projectTitle, `projectImage` = :projectImage, `projectTitleLink` = :projectTitleLink WHERE `id` = :projectId");

    $query->bindParam(':projectTitle', $projectTitle);
    $query->bindParam(':projectTitleLink', $projectTitleLink);
    $query->bindParam(':projectImage', $projectImage);
    $query->bindParam(':projectId', $projectId);
    $query->execute();
}

/*
 * Gets user credentials from the database.
 *
 * @param $db object database link and credentials PDO object.
 *
 * @return array returns associative array with arrays credentials from users and passwords tables from database.
 */
function getUserCredentials(PDO $db):array {
    $userCredentialsQuery = $db->prepare("SELECT `users`.`name`, `password` FROM `users` LEFT JOIN `passwords` ON `users`.`id` = `passwords`.`userId`");
    $userCredentialsQuery->execute();
    return $userCredentialsQuery->fetchAll();
}

/*
 * Checks login details are validated and match saved credentials.
 *
 * @param $actualUserName string username stored credential.
 * @param $actualPassword string password stored credential.
 * @param $inputUserName string form inout username.
 * @param $inputPassword string form input password.
 *
 * @return bool returns true if credentials are matched.
 */
function checkCredentials(string $actualUserName, string $actualPassword, string $inputUserName, string $inputPassword): bool {

    if (($inputUserName === $actualUserName) && ($inputPassword === $actualPassword)) {
        session_start();
        $_SESSION['loggedIn'] = true;
        header('Location: admin.php');
        return true;
    } else {
        session_start();
        $_SESSION['loggedIn'] = false;
        echo 'Please enter user name and password';
        return false;
    }
}

/*
 * Directs to admin page or echoes instructions depending on credentials check.
 *
 * @return bool returns true if both content types are string.
 */


function loggedInStatus():bool {
    session_start();

    if ($_SESSION['loggedIn'] !== true) {
        echo 'Please log in';
        header('Location: admin.php');
        return false;
    } else {
        return true;
    }
}
