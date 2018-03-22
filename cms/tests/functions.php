<?php
use PHPUnit\Framework\TestCase;

require '../functions.php';

class StackTest extends TestCase
{
    //Success
    public function testInsertParagraph()
    {
        $expected = '<p>I am currently attending Mayden Academy to become a full stack developer using HTML, CSS, Java Script, PHP, SQL and Node.js.</p><p>Other interests are back end development using ASP.net and C#.</p>';
        $input = [0 => ["aboutMeArticle"=>  "I am currently attending Mayden Academy to become a full stack developer using HTML, CSS, Java Script, PHP, SQL and Node.js."], 1 => ["aboutMeArticle" => "Other interests are back end development using ASP.net and C#." ]];
        $case = insertParagraph($input);

        $this->assertEquals($case, $expected);
    }


    public function testReturnProjectTitles()
    {

    }

    public function testReturnProjectTitleLinks()
    {

    }

    public function testReturnProjectImages()
    {

    }

    public function testReturnProjectIds()
    {

    }

    public function testReturnProjectTitle()
    {

    }

    public function testReturnProjectTitleLink()
    {

    }

    public function testReturnProjectImage()
    {

    }

    public function testReturnProjectId(){

    }

    public function testReturnArticle()
    {

    }

    public function testReturnParagraph()
    {

    }


    public function testGetProjectInfo(){

    }


}

