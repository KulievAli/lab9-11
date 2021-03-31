<?php

namespace kuliev;

class LinearEquationSolver
{
    protected $X1;

    public function solveLinearEquation($a, $b)
    {
        if ($a == 0) {
            throw new KulievException('The equation does not have exist');
        }
        MyLog::log("This is linear equation\n");
        MyLog::log('Roots: ');
        MyLog::log(-($b / $a));
    }
}