<?php
    session_start();
    ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>408-2</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body bgcolor="<?= $_SESSION["color"]?>">
    <h1>Fondo Sesion 2</h1>
    <form action="408fondoSesion1.php" method="post">
        <h2><a href="408fondoSesion1.php">Volver</a></h2>
        <h2><a href="408fondoSesion1.php?closeSesion=true">Cerrar sesión</a></h2>
    </form>
</body>
</html>