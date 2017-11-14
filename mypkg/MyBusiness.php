<?php

namespace mypkg;
class MyBusiness
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
