<?php

/*
 * Returns all project titles from array content.
 *
 * @param $array array associative array.
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
 * Returns article from array content.
 *
 * @param $db PDO object connection to the database.
 *
 * @return string the content of the arrays within the arrays.
 */
function getArticle(PDO $db):string {
    $aboutMeArticleQuery = $db->prepare("SELECT `aboutMeArticle` FROM `aboutMe` WHERE `aboutMeArticle` IS NOT NULL;");
    $aboutMeArticleQuery->execute();
    $aboutMeArticle = $aboutMeArticleQuery->fetchAll();
    $paragraph = '';

    foreach ($aboutMeArticle as $value) {
            $paragraph .= $value['aboutMeArticle']."\n"."\n";
    }

        $article = "
    <h1>About me article</h1>
        <div>
            <textarea name=\"aboutMe\" cols=\"50\" rows=\"15\" maxlength=\"500\">".$paragraph."</textarea>
        </div>
    ";
        return $article;
}

/*
* Updates the values of a row in aboutMe table.
 *
 * @param $db PDO object connection to the database.
 * @param $paragraph string used with post from form and passed in to update the aboutMe table.
 * @param $paragraphId int used with post from form and passed in to update the aboutMe table.
 *
 */
function updateParagraph(PDO $db, string $paragraph, int $paragraphId)
{
    $query = $db->prepare("UPDATE `aboutMe` SET `aboutMeArticle` = :paragraph WHERE `id` = :paragraphId;");

    $query->bindParam(':paragraph', $paragraph);
    $query->bindParam(':paragraphId', $paragraphId);
    $query->execute();
}

/*
 * Returns an associative array with content from portfolio table.
 *
 * @param $db PDO object connection to the database.
 *
 * @return array returns associative array with arrays containing content from portfolio table.
 */
function getProjectInfo(PDO $db):array {
    $projectInfoQuery = $db->prepare("SELECT `id`, `projectTitle`, `projectTitleLink`,`projectImage` FROM `portfolio`;");
    $projectInfoQuery->execute();
    return $projectInfo = $projectInfoQuery->fetchAll();
}

/*
 * Updates the values of a row in portfolio table.
 *
 * @param $db PDO object connection to the database.
 * @param $projectTitle string used with post from form and passed in to update the portfolio table.
 * @param $projectTitleLink string used with post from form and passed in to update the portfolio table.
 * @param $projectImage string object used with post from form and passed in to update the portfolio table.
 * @param $projectId string used with post from form and passed in to update the portfolio table.
 *
 */
function updateProject(PDO $db, string $projectTitle, string $projectTitleLink, string $projectImage, int $projectId)
{
    $query = $db->prepare("UPDATE `portfolio` SET `projectTitle` = :projectTitle, `projectImage` = :projectImage, `projectTitleLink` = :projectTitleLink WHERE `id` = :projectId;");

    $query->bindParam(':projectTitle', $projectTitle);
    $query->bindParam(':projectTitleLink', $projectTitleLink);
    $query->bindParam(':projectImage', $projectImage);
    $query->bindParam(':projectId', $projectId);
    $query->execute();
}

/*
 * Gets user credentials.
 *
 * @param $db PDO object connection to the database.
 *
 * @return array returns associative array with arrays credentials from users and passwords tables.
 */
function getUserCredentials(PDO $db):array {
    $userCredentialsQuery = $db->prepare("SELECT `name`, `password` FROM `users`;");
    $userCredentialsQuery->execute();
    return $userCredentialsQuery->fetchAll();
}

/*
 * Checks login details are validated and match saved credentials.
 *
 * @param $actualUserName string username stored credential.
 * @param $hashedPassword string password stored credential.
 * @param $inputUserName string form inout username.
 * @param $inputPassword string form input password.
 *
 * @return bool returns true if credentials are matched.
 */
function checkCredentials(string $actualUserName, string $hashedPassword, string $inputUserName, string $inputPassword):bool {

    if (($inputUserName === $actualUserName) && (password_verify($inputPassword, $hashedPassword) === true)) {
        return true;
    } else {

        return false;
    }
}

/*
 * Logs user in if they enter right credentials.
 *
 * @param $checkCredentials bool passed in whether user loged in with right credentials or not.
 *
 */
function login ($checkCredentials) {
    if (($checkCredentials === true)) {
        session_start();
        $_SESSION['loggedIn'] = true;
        header('Location: admin.php');
    } else {
        session_start();
        $_SESSION['loggedIn'] = false;
        echo 'Please enter user name and password';
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

/*
 * Adds a sign out button to pages.
 *
 * @return string returns a form that contains a button.
 */
function getSignOutButton():string {
    $signOutButton = "
            <form method=\"post\" action=\"signOut.php\">
                <input type=\"submit\" name=\"signOutButton\" value=\"Sign Out\">
            </form>
    ";
    return $signOutButton;
}

/*
 * Signs out of session.
 *
 */
function signOut():void{
    if (isset($_POST['signOutButton'])) {
        session_start();
        session_destroy();
        header("Location: login.php");
    } else {
        header("Location: login.php");
    }
}

/*
 * Updates user credentials.
 *
 * @param $db PDO object connection to the database.
 * @param $actualUserName string value updated through query.
 * @param $hashedPassword int secure value updated through query.
 */
function updateCredentials (PDO $db, string $actualUserName, string $hashedPassword) {

    $query = $db->prepare("UPDATE `users` SET `name` = :actualUserName, `password` = :hashedPassword;");
    $query->bindParam(':actualUserName', $actualUserName);
    $query->bindParam(':hashedPassword', $hashedPassword);
    $query->execute();
}

/*
 * Returns footer from array content.
 *
 * @param $db PDO object connection to the database.
 *
 * @return string the content of the arrays within the arrays.
 */
function getFooterLinks(PDO $db):string {
    $footerLinksQuery = $db->prepare("SELECT `contactEmail`, `githubLink` FROM `footer`;");
    $footerLinksQuery->execute();
    $footerLinks = $footerLinksQuery->fetchAll();

    foreach ($footerLinks as $link) {
        $emailLink = $link['contactEmail'];
        $githubLink = $link['githubLink'];
    }

    $footer = "
    <h1>Footer Links</h1>
        <div>
            <textarea name=\"emailLink\" cols=\"50\" rows=\"2\" maxlength=\"50\">".$emailLink."</textarea>
            <p></p>
            <textarea name=\"emailLink\" cols=\"50\" rows=\"2\" maxlength=\"50\">".$githubLink."</textarea>
        </div>
    ";
    return $footer;
}

/*
 * Updates the contactEmail value of a row in footer table.
 *
 * @param $db PDO object connection to the database.
 * @param $contactEmail string used with post from form and passed in to update contactEmail.
 *
 */
function updateContactEmail(PDO $db, string $contactEmail) {
    $query = $db->prepare("UPDATE `footer` SET `contactEmail` = :contactEmail WHERE `id` = 1;");
    $query->bindParam(':contactEmail', $contactEmail);
    $query->execute();
}

/*
 * Updates the githubLink value of a row in footer table.
 *
 * @param $db PDO object connection to the database.
 * @param $githubLink string used with post from form and passed in to update githubLink.
 *
 */
function updateGithubLink(PDO $db, string $githubLink) {
    $query = $db->prepare("UPDATE `footer` SET `githubLink` = :githubLink WHERE `id` = 1;");
    $query->bindParam(':githubLink', $githubLink);
    $query->execute();
}

