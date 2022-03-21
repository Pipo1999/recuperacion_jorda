<?php
    $filas = $_GET["filas"];
    $columnas = $_GET["columnas"];
?>

<!doctype html>
<html lang="es">
<head>
    <title>225</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel=stylesheet href=estilos.css type='text/css'>
</head>
<body>
    <div>
        <table>
            <tr>
                <th></th>
                <?php for($i=1; $i <= $columnas; $i++) : ?>
                    <th><?=$i?></th>
                <?php endfor; ?>
            </tr>
            <?php for($j=1;$j <= $filas; $j++) : ?>
                <tr>
                    <th>
                        <?=$j?>
                    </th>
                    <?php for($y=1; $y <= $columnas; $y++) : ?>
                        <td><?=$j.$y?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    </div>
</body>
</html>
