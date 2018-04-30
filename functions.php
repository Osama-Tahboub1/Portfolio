<?php

/*
 * Returns an associative array with content from aboutMe table from database.
 *
 * @param $db PDO database link and credentials PDO object.
 *
 * @return array returns associative array with arrays containing content from aboutMe table from database.
 */
function getAboutMeArticle(PDO $db):array {
    $aboutMeArticleQuery = $db->prepare("SELECT `aboutMeArticle` FROM `aboutMe`;");
    $aboutMeArticleQuery->execute();
    $aboutMeArticle = $aboutMeArticleQuery->fetchAll();
    return $aboutMeArticle;
}

/*
 * Returns an associative array with content from footer table from database.
 *
 * @param $db PDO database link and credentials PDO object.
 *
 * @return array returns associative array with arrays containing content from footer table from database.
 */
function getFooterContent(PDO $db):array {
    $footerContentQuery = $db->prepare("SELECT `contactIcon`, `smallContactIcon`, `contactEmail`, `emailSubject`, `adminLoginIcon`, `adminLoginLink`   FROM `footer`");
    $footerContentQuery->execute();
    $footerContent = $footerContentQuery->fetchAll();
    return $footerContent;
}

/*
 * Returns an associative array with content from portfolio table from database.
 *
 * @param $db PDO database link and credentials PDO object.
 *
 * @return array returns associative array with arrays containing content from portfolio table from database.
 */
function getProjectContent(PDO $db):array {
    $projectContentQuery = $db->prepare("SELECT `projectTitle` ,`projectTitleLink`, `projectImage`  FROM `portfolio`");
    $projectContentQuery->execute();
    $projectContent = $projectContentQuery->fetchAll();
    return $projectContent;
}

/*
 * Adds paragraph from array content provided by database.
 *
 * @param $array array associative array provided by database.
 *
 * @return string the text content of an array pulled from the database.
 */
function insertParagraph(array $array):string {
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
 * @return string the text content of an array pulled from the database.
 */
function getPortfolio ($projectContent)
{
    foreach ($projectContent as $arr) {
        ?>
        <div class="col3 col2Sm">
            <h2><a href="<?php echo $arr['projectTitleLink']; ?>">
                    <?php echo $arr['projectTitle']; ?>
                </a></h2>
            <img src="<?php echo $arr['projectImage']; ?>">
        </div>
        <?php
    }
}