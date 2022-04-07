<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        setcookie('color', $_POST["colores"], time() + 3600 * 24);
        header("location: 407fondo.php");
    }

    if ( isset( $_COOKIE["color"] ) ) {
        $color = $_COOKIE["color"];
    } else {
        $color = "";
    }

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>407</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body bgcolor="<?=$color?>">
    <form action="" method="POST">
        <select name="colores">
            <option value="red">Rojo</option>
            <option value="green">Verde</option>
            <option value="blue">Azul</option>
        </select>

        <button type="submit" name="enviar">Enviar</button>
    </form>
</body>
</html>
