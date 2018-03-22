<?php
use PHPUnit\Framework\TestCase;

require '../functions.php';


class StackTest extends TestCase
{
    //Success
    public function testReturnProjectTitles()
    {
        $expected = "Pilot Shop\nCMS Project\nNew Project\n\n\n\n\n\n\n";
        $input =[0=>["id"=>"1","projectTitle"=>"Pilot Shop","projectTitleLink"=>"https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/","projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],1=>["id"=>"2","projectTitle"=>"CMS Project","projectTitleLink"=>"https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/", "projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],2=>["id"=>"3","projectTitle"=>"New Project","projectTitleLink"=> "https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/","projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],3=>["id"=>"4","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],4=>["id"=>"5","projectTitle"=> NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],5=>["id"=>"6","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],6=>["id"=>"7","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],7=>["id"=>"8","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],8=>["id"=>"9","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL]];
        $case = returnProjectTitles($input);

        $this->assertEquals($case, $expected);
    }

    public function testReturnProjectTitleLinks()
    {
        $expected = "https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/\nhttps://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/\nhttps://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/\n\n\n\n\n\n\n";
        $input =[0=>["id"=>"1","projectTitle"=>"Pilot Shop","projectTitleLink"=>"https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/","projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],1=>["id"=>"2","projectTitle"=>"CMS Project","projectTitleLink"=>"https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/", "projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],2=>["id"=>"3","projectTitle"=>"New Project","projectTitleLink"=> "https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/","projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],3=>["id"=>"4","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],4=>["id"=>"5","projectTitle"=> NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],5=>["id"=>"6","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],6=>["id"=>"7","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],7=>["id"=>"8","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],8=>["id"=>"9","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL]];
        $case = returnProjectTitleLinks($input);

        $this->assertEquals($case, $expected);
    }

    public function testReturnProjectImages()
    {
        $expected = "https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png\nhttps://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png\nhttps://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png\n\n\n\n\n\n\n";
        $input =[0=>["id"=>"1","projectTitle"=>"Pilot Shop","projectTitleLink"=>"https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/","projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],1=>["id"=>"2","projectTitle"=>"CMS Project","projectTitleLink"=>"https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/", "projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],2=>["id"=>"3","projectTitle"=>"New Project","projectTitleLink"=> "https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/","projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],3=>["id"=>"4","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],4=>["id"=>"5","projectTitle"=> NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],5=>["id"=>"6","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],6=>["id"=>"7","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],7=>["id"=>"8","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],8=>["id"=>"9","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL]];
        $case = returnProjectImages($input);

        $this->assertEquals($case, $expected);
    }

    public function testReturnProjectIds()
    {
        $expected = "1\n2\n3\n4\n5\n6\n7\n8\n9\n";
        $input =[0=>["id"=>"1","projectTitle"=>"Pilot Shop","projectTitleLink"=>"https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/","projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],1=>["id"=>"2","projectTitle"=>"CMS Project","projectTitleLink"=>"https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/", "projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],2=>["id"=>"3","projectTitle"=>"New Project","projectTitleLink"=> "https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/","projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],3=>["id"=>"4","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],4=>["id"=>"5","projectTitle"=> NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],5=>["id"=>"6","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],6=>["id"=>"7","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],7=>["id"=>"8","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],8=>["id"=>"9","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL]];
        $case = returnProjectIds($input);

        $this->assertEquals($case, $expected);
    }
    public function testReturnProjectTitle()
    {
        $expected = "Pilot Shop";
        $input1 =[0=>["id"=>"1","projectTitle"=>"Pilot Shop","projectTitleLink"=>"https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/","projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],1=>["id"=>"2","projectTitle"=>"CMS Project","projectTitleLink"=>"https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/", "projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],2=>["id"=>"3","projectTitle"=>"New Project","projectTitleLink"=> "https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/","projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],3=>["id"=>"4","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],4=>["id"=>"5","projectTitle"=> NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],5=>["id"=>"6","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],6=>["id"=>"7","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],7=>["id"=>"8","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],8=>["id"=>"9","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL]];
        $input2 = 1;
        $case = returnProjectTitle($input1, $input2);

        $this->assertEquals($case, $expected);
    }


    public function testReturnProjectTitleLink()
    {
        $expected = "https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/";
        $input1 =[0=>["id"=>"1","projectTitle"=>"Pilot Shop","projectTitleLink"=>"https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/","projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],1=>["id"=>"2","projectTitle"=>"CMS Project","projectTitleLink"=>"https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/", "projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],2=>["id"=>"3","projectTitle"=>"New Project","projectTitleLink"=> "https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/","projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],3=>["id"=>"4","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],4=>["id"=>"5","projectTitle"=> NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],5=>["id"=>"6","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],6=>["id"=>"7","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],7=>["id"=>"8","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],8=>["id"=>"9","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL]];
        $input2 = 1;
        $case = returnProjectTitleLink($input1, $input2);

        $this->assertEquals($case, $expected);
    }

    public function testReturnProjectImage()
    {
        $expected = "https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png";
        $input1 =[0=>["id"=>"1","projectTitle"=>"Pilot Shop","projectTitleLink"=>"https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/","projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],1=>["id"=>"2","projectTitle"=>"CMS Project","projectTitleLink"=>"https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/", "projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],2=>["id"=>"3","projectTitle"=>"New Project","projectTitleLink"=> "https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/","projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],3=>["id"=>"4","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],4=>["id"=>"5","projectTitle"=> NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],5=>["id"=>"6","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],6=>["id"=>"7","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],7=>["id"=>"8","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],8=>["id"=>"9","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL]];
        $input2 = 1;
        $case = returnProjectImage($input1, $input2);

        $this->assertEquals($case, $expected);
    }

    public function testReturnProjectId(){
        $expected = "1";
        $input1 =[0=>["id"=>"1","projectTitle"=>"Pilot Shop","projectTitleLink"=>"https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/","projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],1=>["id"=>"2","projectTitle"=>"CMS Project","projectTitleLink"=>"https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/", "projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],2=>["id"=>"3","projectTitle"=>"New Project","projectTitleLink"=> "https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/","projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"],3=>["id"=>"4","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],4=>["id"=>"5","projectTitle"=> NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],5=>["id"=>"6","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],6=>["id"=>"7","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],7=>["id"=>"8","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL],8=>["id"=>"9","projectTitle"=>NULL,"projectTitleLink"=>NULL,"projectImage"=>NULL]];
        $input2 = 1;
        $case = returnProjectId($input1, $input2);

        $this->assertEquals($case, $expected);
    }

}



