<?php
$numero= 23;

if ($numero < 0) {
    echo "Edad incorrecta";
}

if ($numero < 3) {
    echo "Esta edad corresponde a la de un bebé";
}

if ($numero > 4 and $numero < 12) {
    echo "Esta edad corresponde a la de un niño";
}

if ($numero > 13 and $numero < 17) {
    echo "Esta edad corresponde a la de un adolescente";
}

if ($numero > 18 and $numero < 66) {
    echo "Esta edad corresponde a la de un adulto";
}

if ($numero > 67) {
    echo "Esta edad corresponde a la de un jubilado";
}

?>