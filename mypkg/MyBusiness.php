<?php

namespace fproject\calendar;
class Period
{
    public function sayHello($a, $b)
    {
        $s = "Hello";
        if($a && $b)
        {
            $s = $s . " world";
        }
        return $s;
    }
}
