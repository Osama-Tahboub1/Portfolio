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
        $expected =;
        $input =;
        $case =;

        $this->assertEquals($case, $expected);
    }

    public function testReturnProjectTitleLinks()
    {
        $expected =;
        $input =;
        $case =;

        $this->assertEquals($case, $expected);
    }

    public function testReturnProjectImages()
    {
        $expected =;
        $input =;
        $case =;

        $this->assertEquals($case, $expected);
    }

    public function testReturnProjectIds()
    {
        $expected =;
        $input =;
        $case =;

        $this->assertEquals($case, $expected);
    }

    public function testReturnProjectTitle()
    {
        $expected =;
        $input =;
        $case =;

        $this->assertEquals($case, $expected);
    }

    public function testReturnProjectTitleLink()
    {
        $expected =;
        $input =;
        $case =;

        $this->assertEquals($case, $expected);
    }

    public function testReturnProjectImage()
    {
        $expected =;
        $input =;
        $case =;

        $this->assertEquals($case, $expected);
    }

    public function testReturnProjectId(){
        $expected =;
        $input =;
        $case =;

        $this->assertEquals($case, $expected);
    }

    public function testReturnArticle()
    {
        $expected =;
        $input =;
        $case =;

        $this->assertEquals($case, $expected);
    }

    public function testReturnParagraph()
    {
        $expected =;
        $input =;
        $case =;

        $this->assertEquals($case, $expected);
    }


    public function testGetProjectInfo(){
        $expected =;
        $input =;
        $case =;

        $this->assertEquals($case, $expected);
    }


}

