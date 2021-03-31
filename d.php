<?php

namespace Kuliev;

class B extends A
{
    protected function desc ($a, $b, $c) {
        return $b * $b - 4 * $a * $c;
    }

    function roots ($a, $b, $c) {
        if($a == 0){
            return parent::func($b, $c);
        }
        $d = $this->desc($a, $b, $c);

        if ($d > 0) {
            $x = array();
           array_push($x, (-$b - Sqrt($d))/2 * $a);
           array_push($x, (-$b + Sqrt($d))/2 * $a);
            return $x;
        }
        if ($d == 0) {
            $x = array();
            array_push($x, -$b / 2 * $a);
            return $x;
        }
        return null;
    }
}