<?php
    session_start();
    if (!empty($_GET["closeSesion"])){
        echo "<h1>Sesión cerrada correctamente.</h1>";
        session_destroy();
        header("location: 408fondoSesion1.php");
    }

    if (empty($_SESSION["color"])) {
        $_SESSION["color"] = "white";
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $_SESSION["color"] = $_POST["colores"];
        header("location: 408fondoSesion1.php");
    }
    ?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>408</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body bgcolor="<?= $_SESSION['color'] ?>">
<h1>Fondo Sesion 1</h1>
<form action="" method="POST">
    <select name="colores">
        <option value="white">Blanco</option>
        <option value="red">Rojo</option>
        <option value="green">Verde</option>
        <option value="blue">Azul</option>
    </select>

    <button type="submit" name="enviar">Enviar Color</button>
</form>
<br>
<h2><a href="408fondoSesion2.php">408fondoSesion2.php</a></h2>
</body>
</html>