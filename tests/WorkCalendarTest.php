<?php
use fproject\calendar\WorkCalendar;
use fproject\calendar\Period;
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
        $this->assertTrue($workCal->id === "Some Value");
    }
    
    public function testWorkCalender3()
    {
        $workCal = new WorkCalendar();
        $workCal->periods = [new Period()];
        $this->assertTrue(count($workCal->periods) === 1);
    }
}
?>
