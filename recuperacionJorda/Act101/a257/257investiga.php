<?php
//-----------------------------------------------------------------------------------------//
    // ucwords: pasa la primera letra de cada palabra a mayúscula
    $ucwords1 = "la vida es una lenteja, o la tomas, o la dejas.";
    echo "<h1>ucwords 1</h1>";
    echo "<p>".ucwords($ucwords1)."</p>";

    // también se puede usar con separadores
    echo "<h1>ucwords 2</h1>";
    $ucwords2 = "la-vida-es-una-lenteja,-o-la-tomas,-o-la-dejas.";
    echo "<p>".ucwords($ucwords2, '-')."</p>";
//-----------------------------------------------------------------------------------------//

//-----------------------------------------------------------------------------------------//
    // strrev: lo que hace es escribir una cadena al revés.
    $strrev = "La vida es una lenteja, o la tomas, o la dejas.";
    echo "<h1>strrev</h1>";
    echo "<p>".strrev($strrev)."</p>";
//-----------------------------------------------------------------------------------------//

//-----------------------------------------------------------------------------------------//
    // str_repeat: repite una cadena tantas veces como se indique
    $str_repeat = "La vida ";
    echo "<h1>str_repeat</h1>";
    echo "<p>".str_repeat($str_repeat, 15)."</p>";
//-----------------------------------------------------------------------------------------//

//-----------------------------------------------------------------------------------------//

    // md5: calcula el 'hash' md5 de un string

    $md5 = "La vida es una lenteja, o la tomas, o la dejas.";
    echo "<h1>md5 binario</h1>";
    echo "<p>".md5($md5, true)."</p>";
    echo "<h1>md5 no binario</h1>";
    echo "<p>".md5($md5, false)."</p>";
//-----------------------------------------------------------------------------------------//