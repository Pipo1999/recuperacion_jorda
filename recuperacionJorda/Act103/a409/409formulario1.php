<?php
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
    <form action="409formulario2.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre">
        <br>
        <label for="apellidos">Apellidos: </label>
        <input type="text" id="apellidos" name="apellidos">
        <br>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email">
        <br>
        <label for="url">Pagina Web Personal: </label>
        <input type="url" id="url" name="url">
        <br>
        <label for="sexo">Sexo: </label>
        <input type="radio" id="sexo" name="sexo" value="Hombre">Hombre
        <input type="radio" name="sexo" value="Mujer">Mujer
        <input type="radio" name="sexo" value="No binario">No binario
        <br>

        <button type="submit">Enviar Formulario</button>
    </form>
</body>
</html>