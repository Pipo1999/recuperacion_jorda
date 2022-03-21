<?php
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$email = $_GET['email'];
$anyoNacimiento = $_GET['anyoNacimiento'];
$telefono = $_GET['telefono'];
?>

<!doctype html>
<html lang="es">
    <head>
        <title>204</title>
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
                <td><?php echo $nombre ?></td>
            </tr>
            <tr>
                <th>Apellidos</th>
                <td><?php echo $apellidos ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email ?></td>
            </tr>
            <tr>
                <th>Año de nacimiento</th>
                <td><?php echo $anyoNacimiento ?></td>
            </tr>
            <tr>
                <th>Teléfono</th>
                <td><?php echo $telefono ?></td>
            </tr>
        </table>
    </body>
</html>
