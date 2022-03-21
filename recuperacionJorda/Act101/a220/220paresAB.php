<?php
$numInicio = 5;
$numFin = 37;
$bucle = abs(($numInicio-$numFin));

for($i=0; $i<=$bucle; $i++){
    if ($numInicio%2 == 0) {
        echo $numInicio."</br>";
    }
    $numInicio += 1;
}
?>