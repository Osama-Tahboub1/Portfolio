<?php
use PHPUnit\Framework\TestCase;

require '../functions.php';


class StackTest extends TestCase
{
    //Success
    public function testReturnProjectTitles()
    {
        $db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        $expected = "Pilot Shop\nCMS Project\nNew Project\n\n\n\n\n\n\n";
        $input =getProjectInfo($db);
        $case = returnProjectTitles($input);

        $this->assertEquals($case, $expected);
    }

    public function testReturnProjectTitleLinks()
    {
        $db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        $expected = "https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/\nhttps://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/\nhttps://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/\n\n\n\n\n\n\n";
        $input =getProjectInfo($db);
        $case = returnProjectTitleLinks($input);

        $this->assertEquals($case, $expected);
    }

    public function testReturnProjectImages()
    {
        $db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        $expected = "https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png\nhttps://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png\nhttps://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png\n\n\n\n\n\n\n";
        $input =getProjectInfo($db);
        $case = returnProjectImages($input);

        $this->assertEquals($case, $expected);
    }

    public function testReturnProjectIds()
    {
        $db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        $expected = "1\n2\n3\n4\n5\n6\n7\n8\n9\n";
        $input =getProjectInfo($db);
        $case = returnProjectIds($input);

        $this->assertEquals($case, $expected);
    }
    public function testReturnProjectTitle()
    {
        $db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        $expected = "Pilot Shop";
        $input1 =getProjectInfo($db);
        $input2 = 1;
        $case = returnProjectTitle($input1, $input2);

        $this->assertEquals($case, $expected);
    }


    public function testReturnProjectTitleLink()
    {
        $db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        $expected = "https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/";
        $input1 =getProjectInfo($db);
        $input2 = 1;
        $case = returnProjectTitleLink($input1, $input2);

        $this->assertEquals($case, $expected);
    }

    public function testReturnProjectImage()
    {
        $db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        $expected = "https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png";
        $input1 =getProjectInfo($db);
        $input2 = 1;
        $case = returnProjectImage($input1, $input2);

        $this->assertEquals($case, $expected);
    }

    public function testReturnProjectId(){
        $db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        $expected = "1";
        $input1 =getProjectInfo($db);
        $input2 = 1;
        $case = returnProjectId($input1, $input2);

        $this->assertEquals($case, $expected);
    }


}

