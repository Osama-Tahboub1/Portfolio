<?php

/* Doc Block
 * Returns all project titles from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string a list of project titles in the arrays within the arrays pulled from the database.
 */
function returnProjectTitles(array $array): string{
    $titles = '';
    foreach ($array as $value) {
        $titles .=$value['projectTitle']."\n";
    }
    return $titles;
}

/* Doc Block
 * Returns all project title links from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string a list of project title links in the arrays within the arrays pulled from the database.
 */
function returnProjectTitleLinks(array $array): string{
    $titlesLinks = '';
    foreach ($array as $value) {
        $titlesLinks .= $value['projectTitleLink']."\n";
    }
    return $titlesLinks;
}

/* Doc Block
 * Returns all project image links from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string a list of project image links in the arrays within the arrays pulled from the database.
 */
function returnProjectImages(array $array): string{
    $projectImages = '';
    foreach ($array as $value) {
        $projectImages .= $value['projectImage']."\n";
    }
    return $projectImages;
}

/* Doc Block
 * Returns project id's from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string a list of id's or keys in the arrays within the arrays pulled from the database.
 */
function returnProjectIds(array $array): string{
    $projectIds = '';
    foreach ($array as $value) {
        $projectIds .= $value["id"]."\n";
    }
    return $projectIds;
}

/* Doc Block
 * Returns a single project title from array content provided by database.
 *
 * @param $array array associative array provided by database query.
 * @param $recId int number pointing to the record id number in the database.
 *
 * @return string the title content for a single record.
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
 * @param $array array associative array provided by database query.
 * @param $recId int number pointing to the record id number in the database.
 *
 * @return string the title link content for a single record.
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
 * @param $array array associative array provided by database query.
 * @param $recId int number pointing to the record id number in the database.
 *
 * @return string the project image link for a single record.
 */
function returnProjectImage(array $array, int $recId): string{
    $index = $recId - 1;
    $projectImageArray = $array[$index];
    $projectImage = '';
    $projectImage .= $projectImageArray['projectImage'];
    return $projectImage;
}

/* Doc Block
 * Returns project id from array content provided by database.
 *
 * @param $array array associative array provided by database.
 * @param $recId int number pointing to the record id number in the database.
 *
 * @return string an id or key for a single record.
 */
function returnProjectId(array $array, int $recId){
    $index = $recId - 1;
    $projectIdArray = $array[$index];
    $projectId = '';
    $projectId .= $projectIdArray['id'];
    return $projectId;
}

/* Doc Block
 * Returns article from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnArticle(array $array): string{
    $article = '';

    foreach ($array as $value) {
        $article .= $value['aboutMeArticle']."\n"."\n";
    }
    return $article;
}

/* Doc Block
 * Returns single paragraph from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnParagraph(array $array, int $id): string{
    $index = $id - 1;
    $paragraphArray = $array[$index];
    $paragraph = '';
    $paragraph .= $paragraphArray['aboutMeArticle'];
    return $paragraph;
}

//SQL Functions:

/* Doc Block
 * Returns an associative array with content from portfolio table from database.
 *
 * @param $db object database link and credentials PDO object.
 *
 * @return array returns associative array with arrays containing content from portfolio table from database.
 */
function getProjectInfo(PDO $db): array{
    $projectInfoQuery = $db->prepare("SELECT `id`, `projectTitle`, `projectTitleLink`,`projectImage` FROM `portfolio` ");
    $projectInfoQuery->execute();
    return $projectInfo = $projectInfoQuery->fetchAll();
}

/* Doc Block
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
function updateProject(PDO $db, string $projectTitle, string $projectTitleLink, string $projectImage, string $projectId) {

    $query = $db->prepare("UPDATE `portfolio` SET `projectTitle` = :projectTitle, `projectImage` = :projectImage, `projectTitleLink` = :projectTitleLink WHERE `id` = :projectId");

    $query->bindParam (':projectTitle',$projectTitle);
    $query->bindParam (':projectTitleLink',$projectTitleLink);
    $query->bindParam (':projectImage',$projectImage);
    $query->bindParam (':projectId',$projectId);

    $query->execute();

    $updatedInfo = $projectId.' '. $projectTitle.' '.$projectTitleLink.' '.$projectImage;
    return $updatedInfo;
}

/* Doc Block
 * Gets user credentials from the database.
 *
 * @param $db object database link and credentials PDO object.

 *
 * @return array returns associative array with arrays credentials from users and passwords tables from database.
 */
function getUserCredentials(PDO $db): array{
    $userCredentialsQuery = $db->prepare("SELECT `users`.`name`, `password` FROM `users` LEFT JOIN `passwords` ON `users`.`id` = `passwords`.`userId`");
    $userCredentialsQuery->execute();
    return $userCredentials = $userCredentialsQuery->fetchAll();
}

/* Doc Block
 * Checks login details are validated and match saved credentials.
 *
 * @param $actualUserName string username stored credential.
 * @param $actualPassword string password stored credential.
 * @param $inputUserName string form inout username.
 * @param $inputPassword string form input password.
 *
 * @return bool returns true if both content types are string.
 */
function checkCredentials(string $actualUserName, string $actualPassword, string $inputUserName, string $inputPassword): bool {


    if (($inputUserName === $actualUserName) && ($inputPassword === $actualPassword)) {
        return true;
    } else {
        return false;
    }
}