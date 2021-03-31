<?php

namespace KirillK;

class A
{
protected $x;


    public function func($a,$b)
    {
        if ($a == 0){
            return 'корней нет';
        }
        return $this->x = -$b / $a;
    }
}