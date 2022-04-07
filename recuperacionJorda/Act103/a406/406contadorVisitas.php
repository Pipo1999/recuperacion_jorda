<?php

    if(isset($_COOKIE["contador"])){
        setcookie('contador', $_COOKIE['contador'] + 1, time() + 3600 * 24);
        echo "<h2>Visita numero {$_COOKIE['contador']}</h2>";
    }
    else{
        setcookie('contador', 1 , time() + 3600 * 24);
        echo "<h2>Bienvenido por primera vez</h2>";
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        if($_POST["borrarCK"] === "true"){
            setcookie('contador', 0, time() - 3600 * 24);
            echo "<br>Cookies borradas";
            header("location: 406contadorVisitas.php");
        }
    }
    ?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>406</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <form action="" method="POST">
        <button type="submit" name="borrarCK" value="true">Reiniciar</button>
    </form>
</body>
</html>
