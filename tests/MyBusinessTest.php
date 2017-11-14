<?php
use mypkg\MyBusiness;
class MyBusinessTest extends PHPUnit_Framework_TestCase
{
    public function testSayHello001()
    {        
        $mb = new MyBusiness();
        $a = true;
        $b = true;
        $s = $mb->sayHello($a, $b);
        $this->assertTrue(s === "Hello world");
    }
}
?>
