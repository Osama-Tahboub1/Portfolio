<?php
use PHPUnit\Framework\TestCase;

require '../about.php';

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
}