<?php
use fproject\calendar\WorkCalendar;
class WorkCalendarTest extends PHPUnit_Framework_TestCase
{
    private $params = [];

    public function testWorkCalendar()
    {        
        $workCal = new WorkCalendar();
        $workCal->name = "My Calendar";
        $this->assertTrue($workCal->name === "My Calendar");
    }
    
    public function testWorkCalender2()
    {
         $workCal = new WorkCalendar();
        $workCal->id = "Some Value";
        $this->assertTrue($workCal->id === "Some Value 1");
    }
}
?>
