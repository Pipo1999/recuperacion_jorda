<?php
    $data = [
        "Pepe" => 2.05,
        "Luis" => 1.51,
        "Ivan" => 1.83,
        "Lucia" => 1.67,
        "Maria" => 1.75
    ];
    $alturas = [];
?>

<!doctype html>
<html lang="es">
<head>
    <title>235</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel=stylesheet href=estilos.css type='text/css'>
</head>
<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Altura</th>
        </tr>
        <?php foreach($data as $value=> $altura) : ?>
            <tr>
                <td>
                    <?=$value?>
                </td>
                <td>
                    <?=$altura?>
                </td>
                <?php
                    $altures[] = $altura;
                ?>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td>Media</td>
            <?php
                $media= array_sum($data) / count($data);
            ?>
            <td>
                <?=$media?>
            </td>
        </tr>
    </table>
</body>
</html>
