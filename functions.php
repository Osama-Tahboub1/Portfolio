<?php

/*
 * Returns an associative array with content from aboutMe table.
 *
 * @param $db PDO object connection to the database.
 *
 * @return array returns associative array with arrays containing content from aboutMe table.
 */
function getAboutMeArticle(PDO $db):array {
    $aboutMeArticleQuery = $db->prepare("SELECT `aboutMeArticle` FROM `aboutMe`;");
    $aboutMeArticleQuery->execute();
    $aboutMeArticle = $aboutMeArticleQuery->fetchAll();
    return $aboutMeArticle;
}

/*
 * Resolves array fetched and embeds its values into a string that contains html.
 *
 * @param $db PDO object connection to the database.
 *
 * @return string returns string with that has html tags with embedded values.
 */
function getFooterContent(PDO $db):string {
    $footerContentQuery = $db->prepare("SELECT `contactIcon`, `smallContactIcon`, `contactEmail`, `emailSubject`, `githubLink`, `githubIcon`  FROM `footer`;");
    $footerContentQuery->execute();
    $footerArray = $footerContentQuery->fetchAll();

    foreach ($footerArray as $footerContent) {
        $contactEmail = $footerContent['contactEmail'];
        $emailSubject = $footerContent['emailSubject'];
        $contactIcon = $footerContent['contactIcon'];
        $githubLink = $footerContent['githubLink'];
        $githubIcon = $footerContent['githubIcon'];

    }

    $footer = "
    <div class=\"footerIcons\">
    <a href=mailto:\"".$contactEmail."?Subject=".$emailSubject."\">
            <img src=\"".$contactIcon."\" alt=\"Email me icon\">
        </a>
        <a href=\"".$githubLink."\">
            <img src=\"".$githubIcon."\" alt=\"Email me icon\">
        </a>
    </div>

    ";
    return $footer;
}

/*
 * Returns an associative array with content from portfolio table.
 *
 * @param $db PDO object connection to the database.
 *
 * @return array returns associative array with arrays containing content from portfolio table.
 */
function getProjectContent(PDO $db):array {
    $projectContentQuery = $db->prepare("SELECT `projectTitle` ,`projectTitleLink`, `projectImage`,`githubLink`, `githubIcon`  FROM `portfolio` WHERE `projectTitle` IS NOT NULL;");
    $projectContentQuery->execute();
    $projectContent = $projectContentQuery->fetchAll();
    return $projectContent;
}

/*
 * Adds paragraph from array content.
 *
 * @param $array array associative array.
 *
 * @return string the string value of the array.
 */
function getParagraph(array $array):string {
    $paragraph = '';
    foreach ($array as $value) {
        $paragraph .= '<p>'.$value['aboutMeArticle'].'</p>';
    }
    return $paragraph;
}

/*
 * Adds projects contents from array into portfolio.
 *
 * @param $$projectContent array associative array containing arrays with portfolio project contents.
 *
 * @return string the text content of an array.
 */
function getPortfolio ($projectContent)
{
    foreach ($projectContent as $arr) {
        ?>
        <div class="col3 col1Sm">
            <h2>
                <a href="<?php echo $arr['githubLink']; ?>">
                    <img src="<?php echo $arr['githubIcon']; ?>">
                </a>

                <a href="<?php echo $arr['projectTitleLink']; ?>">
                    <?php echo $arr['projectTitle']; ?>
                </a>
            </h2>
            <a href="<?php echo $arr['projectTitleLink']; ?>">
            <img src="<?php echo $arr['projectImage']; ?>">
            </a>
        </div>
        <?php
    }
}