<?php
$dinero=["Billetes" => [500, 200, 100, 50, 20, 10, 5], "Monedas" => [2, 1]];
$cantidad=139;
foreach ($dinero as $monedas_y_billetes => $euros)
    foreach($euros as $euro)
    {
        {
            if($cantidad>=$euro)
            {
                echo "$monedas_y_billetes de $euro: ".floor($cantidad/$euro)."<br>";
                $cantidad=$cantidad%$euro;
                if(!$cantidad)
                    break;
            }
        }
    }
?>