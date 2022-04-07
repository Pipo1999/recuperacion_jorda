<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $_SESSION["usuario"]["nombre"] = $_POST["nombre"];
        $_SESSION["usuario"]["apellidos"] = $_POST["apellidos"];
        $_SESSION["usuario"]["email"] = $_POST["email"];
        $_SESSION["usuario"]["url"] = $_POST["url"];
        $_SESSION["usuario"]["sexo"] = $_POST["sexo"];
    }
    ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>409</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <form action="409formulario3.php" method="post">
        <label for="convivientes">Convivientes: </label>
        <input type="number" id="convivientes" name="convivientes">
        <br>
        <label for="aficiones">Aficiones:</label>
        <input type="checkbox" name="aficiones[]" value="videojuegos" />
        <label for="aficiones">Videojuegos</label>
        <input type="checkbox" name="aficiones[]" value="deporte" />
        <label for="aficiones">Deporte</label>
        <input type="checkbox" name="aficiones[]" value="lectura" />
        <label for="aficiones">Lectura</label>
        <input type="checkbox" name="aficiones[]" value="cocina" />
        <label for="aficiones">Cocina</label>
        <br>
        <select name="menu[]" multiple>
            <option value="macarrones">Macarrones</option>
            <option value="arroz">Arroz</option>
            <option value="pizza">Pizza</option>
            <option value="puchero">Puchero</option>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
