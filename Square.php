<?php

namespace kuliev;


use core\EquationInterface;

class Square extends solveLinearEquation implements EquationInterface
{
    public function solve($a, $b, $c): array
    {
        if ($a == 0) {
            return parent::line($b, $c);
        }
        $D = $this->searchD($a, $b, $c);
        MyLog::log("This is quadratic equation\n");
        MyLog::log('Roots: ');
        if ($D > 0) {
            MyLog::log((-$b) + sqrt($D)) / (2 * $a);
            MyLog::log((-$b) - sqrt($D)) / (2 * $a);
        }
        if ($D == 0) {
            MyLog::log(-($b / (2 * $a)));

        }
        if ($D < 0 ){
            throw new KulievExeption('The equation does not have solution');
        }
    }

    protected function searchD($a, $b, $c)
    {
        $D = $b * $b - 4 * $a * $c;
        return $D;
    }
}