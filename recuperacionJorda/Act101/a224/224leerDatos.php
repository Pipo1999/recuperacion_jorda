<?php
$cantidad = $_GET['cantidad'];

echo "<form action='224sumarDatos.php' method='get'>";
    for ($i = 0; $i < $cantidad; $i++) {
        echo "<label for='num". ($i + 1) ."'>Cantidad ". ($i + 1) .":</label>";
        echo "<input type='text' name='num". ($i + 1) ."' id='num". ($i + 1) ."'></input>";
        echo "<br>";
    }
    echo "<input type='hidden' name='cantidad' value='". $_GET['cantidad'] ."'/>";
    echo "<input type='submit' value='Sumar'></input>";
echo "</form>";
?>