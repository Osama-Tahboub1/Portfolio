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

$contactIconQuery = $db->prepare("SELECT `contactIcon` FROM `footer`");
$contactIconQuery->execute();
$contactIcon = $contactIconQuery->fetchAll();

$smallContactIconQuery = $db->prepare("SELECT `smallContactIcon` FROM `footer`");
$smallContactIconQuery->execute();
$smallContactIcon = $smallContactIconQuery->fetchAll();

$contactEmailQuery = $db->prepare("SELECT `contactEmail` FROM `footer`");
$contactEmailQuery->execute();
$contactEmail = $contactEmailQuery->fetchAll();

$emailSubjectQuery = $db->prepare("SELECT `emailSubject` FROM `footer`");
$emailSubjectQuery->execute();
$emailSubject = $emailSubjectQuery->fetchAll();

$adminLoginIconQuery = $db->prepare("SELECT `adminLoginIcon` FROM `footer`");
$adminLoginIconQuery->execute();
$adminLoginIcon = $adminLoginIconQuery->fetchAll();

$adminLoginLinkQuery = $db->prepare("SELECT `adminLoginLink` FROM `footer`");
$adminLoginLinkQuery->execute();
$adminLoginLink = $adminLoginLinkQuery->fetchAll();

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

/* Doc Block
 * Returns contact email from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnContactEmail(array $array): string{
    $paragraph = '';
    foreach ($array as $value) {
        $paragraph .= $value['contactEmail'];
    }
    return $paragraph;
}

/* Doc Block
 * Returns email subject from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnEmailSubject(array $array): string{
    $paragraph = '';
    foreach ($array as $value) {
        $paragraph .= $value['emailSubject'];
    }
    return $paragraph;
}

/* Doc Block
 * Returns contact icon link from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnContactIcon(array $array): string{
    $paragraph = '';
    foreach ($array as $value) {
        $paragraph .= $value['contactIcon'];
    }
    return $paragraph;
}

/* Doc Block
 * Returns small contact icon link from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnSmallContactIcon(array $array): string{
    $paragraph = '';
    foreach ($array as $value) {
        $paragraph .= $value['smallContactIcon'];
    }
    return $paragraph;
}

/* Doc Block
 * Returns cms page link from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnAdminLoginLink(array $array): string{
    $paragraph = '';
    foreach ($array as $value) {
        $paragraph .= $value['adminLoginLink'];
    }
    return $paragraph;
}

/* Doc Block
 * Returns cms page icon from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the content of the arrays within the arrays pulled from the database.
 */
function returnAdminLoginIcon(array $array): string{
    $paragraph = '';
    foreach ($array as $value) {
        $paragraph .= $value['adminLoginIcon'];
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
    <nav>
        <span><a>About Me</a></span>
        <ul>
            <li>
                About me article
            </li>
        </ul>
        <span><a>Portfolio</a></span>
        <ul>
            <li>
                Projects
            </li>
        </ul>
        <span><a>Footer</a></span>
        <ul>
            <li>
                Contact email
            </li>
            <li>
                Admin page link
            </li>
        </ul>
    </nav>

    <div>
        <form method="post" action="admin.php">
            <textarea name="aboutMe"><?php echo returnParagraph($aboutMeArticle); ?></textarea>
            <input type="submit">
        </form>
    </div>

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

    <div>
        <form method="post" action="admin.php">
            <input type="name" name="contactEmail" value="<?php echo returnContactEmail($contactEmail); ?>">
            <input type="submit">
        </form>

        <form method="post" action="admin.php">
            <input type="name" name="emailSubject" value="<?php echo returnEmailSubject($emailSubject); ?>">
            <input type="submit">
        </form>

        <form method="post" action="admin.php">
            <input type="name" name="contactIcon" value="<?php echo returnContactIcon($contactIcon); ?>">
            <input type="submit">
        </form>

        <form method="post" action="admin.php">
            <input type="name" name="smallContactIcon" value="<?php echo returnSmallContactIcon($smallContactIcon); ?>">
            <input type="submit">
        </form>
    </div>

    <div>
        <form method="post" action="admin.php">
            <input type="name" name="adminLoginLink" value="<?php echo returnAdminLoginLink($adminLoginLink); ?>">
            <input type="submit">
        </form>

        <form method="post" action="admin.php">
            <input type="name" name="adminLoginIcon" value="<?php echo returnAdminLoginIcon($adminLoginIcon); ?>">
            <input type="submit">
        </form>
    </div>
</body>