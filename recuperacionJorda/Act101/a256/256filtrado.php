<?php

$nums = $_GET["nums"];
$arrayNums = explode(" ", $nums);
$cont = 0;
$numsPares = [];

foreach ($arrayNums as $value) {
    if ($value % 2 == 0) {
        array_push($numsPares, $value);
        $cont++;
    }
}

echo "Los ". $cont ." números pares son:";
foreach ($numsPares as $value) {
    echo " " . $value . " ";
}