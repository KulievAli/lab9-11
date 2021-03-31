<?php

use Kuliev\kv;
use Kuliev\d;

include 'Kuliev/kv.php';
include 'Kuliev/d.php';

$obj = new A ();
$objj = new B ();
$res = $objj->roots(1, 5, 0);

echo($obj->func(6, 3) . PHP_EOL);
foreach ($res as $el) {
    echo $el;
}
