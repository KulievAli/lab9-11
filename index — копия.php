<?php
use kuliev\{Square, MyLog};

include 'kuliev/Square.php';
include 'kuliev/MyLog.php';
try {
$a = readline();
$b = readline();
$c = readline();

$sqr = new Square();
    MyLog::log("The equation is: ". $a.'x^2 + '.$b.'x + '.$c.' = 0'. PHP_EOL);

    $res = $sqr->solve($a, $b, $c);

} catch (RuntimeException $e){
   MyLog::log("Error".$e->getMessage());
}
MyLog::write();