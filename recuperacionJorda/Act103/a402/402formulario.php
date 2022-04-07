<?php

$nombre = $_GET["nombre"];
$apellidos = $_GET["apellidos"];
$url = $_GET["url"];
$sexo = $_GET["sexo"];
$convivientes = $_GET["convivientes"];
$aficiones[] = $_GET["aficiones"];
$menu[] = $_GET["menu"];
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>402</title>
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
            <td><?=$nombre?></td>
        </tr>
        <tr>
            <th>Apellidos</th>
            <td><?=$apellidos?></td>
        </tr>
        <tr>
            <th>Url</th>
            <td><?=$url?></td>
        </tr>
        <tr>
            <th>Sexo</th>
            <td><?=$sexo?></td>
        </tr>
        <tr>
            <th>Convivientes</th>
            <td><?=$convivientes?></td>
        </tr>
        <tr>
            <th>Aficiones</th>
            <td>
                <?php
                foreach ($aficiones as $value){
                    foreach ($value as $aficion){
                        echo $aficion . " ";
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <th>Menú favorito</th>
            <td>
                <?php
                foreach ($menu as $value){
                    foreach ($value as $plato){
                        echo $plato . " ";
                    }
                }
                ?>
            </td>
        </tr>
    </table>

</body>
</html>