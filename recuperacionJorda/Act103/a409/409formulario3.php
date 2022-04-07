<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $_SESSION["usuario"]["convivientes"] = $_POST["convivientes"];
        $_SESSION["usuario"]["aficiones"] = $_POST["aficiones"];
        $_SESSION["usuario"]["menu"] = $_POST["menu"];
    }
    ?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>409</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel=stylesheet href=estilos.css type='text/css'>
</head>
<body>
<table>
    <tr>
        <th>Nombre</th>
        <td><?= $_SESSION["usuario"]["nombre"] ?></td>
    </tr>
    <tr>
        <th>Apellidos</th>
        <td><?= $_SESSION["usuario"]["apellidos"] ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?= $_SESSION["usuario"]["email"] ?></td>
    </tr>
    <tr>
        <th>URL</th>
        <td><?= $_SESSION["usuario"]["url"] ?></td>
    </tr>
    <tr>
        <th>Sexo</th>
        <td><?= $_SESSION["usuario"]["sexo"] ?></td>
    </tr>
    <tr>
        <th>Convivientes</th>
        <td><?= $_SESSION["usuario"]["convivientes"] ?></td>
    </tr>
    <tr>
        <th>Aficiones</th>
        <td>
            <ul>
                <?php foreach ($_SESSION["usuario"]["aficiones"] as $item) {
                    echo "<li>$item</li>";
                } ?>
            </ul>
        </td>
    </tr>
    <tr>
        <th>Menú</th>
        <td>
            <ul>
                <?php foreach ($_SESSION["usuario"]["menu"] as $item) {
                    echo "<li>$item</li>";
                } ?>
            </ul>
        </td>
    </tr>
</table>
</body>
</html>
