<?php

ini_set("display_errors", 1);
error_reporting (-1); 

require __DIR__ . "/vendor/autoload.php";

use kuliev\MyLog;

$solver = new kuliev\QuadEquationSolver();

try {    
    MyLog::log("Program version " . trim(file_get_contents("version")));
    echo "Enter 3 numbers: a, b, c.\n\r";

    $a = readline("Enter a: ");
    $b = readline("Enter b: ");
    $c = readline("Enter c: ");

    $equation = $a."x2+(".$b.")x+(".$c.")=0";
    MyLog::log("Equation is $equation");
    if ($a == 0) {
        MyLog::log("It is a linear equation.");
    } else {
        MyLog::log("It is a quad equation.");
    }

    $result = $solver->solve($a, $b, $c);
    
    $str = implode(" ", $result);
    
    $string = "Equation roots: ";
    MyLog::log($string.$str);
} catch(kuliev\KulievException $err) {
    $message = $err->getMessage();

    MyLog::log($message);
}

MyLog::write();