<?php
use PHPUnit\Framework\TestCase;

require '../functions.php';


class StackTest extends TestCase
{
    //Success

    public function testReturnProjectInfo()
    {
        $expected = "
    <div>
        <h2>Current Values</h2>
        <textarea name=\"projectId\" cols=\"20\" rows=\"10\" maxlength=\"500\">"."1"."\n"."</textarea>
        <textarea name=\"projectTitle\" cols=\"20\" rows=\"10\" maxlength=\"500\">"."Pilot Shop"."\n"."</textarea>
        <textarea name=\"projectTitleLink\" cols=\"100\" rows=\"10\" maxlength=\"500\">"."https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/"."\n"."</textarea>
        <textarea name=\"projectImage\" cols=\"100\" rows=\"10\" maxlength=\"500\">"."https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"."\n"."</textarea>
    </div>
    ";
        $input1 = [0=>["id"=>"1","projectTitle"=>"Pilot Shop","projectTitleLink"=>"https://dev.maydenacademy.co.uk/students/2018/osama/PilotShopSite/","projectImage"=>"https://dev.maydenacademy.co.uk/students/2018/osama/Portfolio/assets/PilotShop.png"]];
        $case = returnProjectInfo($input1);

        $this->assertEquals($expected,$case);
    }

}



