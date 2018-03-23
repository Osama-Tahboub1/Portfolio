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