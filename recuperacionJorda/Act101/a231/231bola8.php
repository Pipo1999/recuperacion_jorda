<?php
    $pregunta = $_GET["pregunta"];
    $respuestas = ["Sí", "No", "Quizás", "Claro que si", "Por supuesto que no", "No lo tengo claro", "Seguro"];
    $arrayLength = count($respuestas) -1;
    $num = rand(0, $arrayLength);
?>

<!doctype html>
<html lang="es">
<head>
    <title>231</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div>
        <h2>Pregunta</h2>
        <p><?=$pregunta?></p>
        <h2>Respuesta</h2>
        <p><?=$respuestas[$num]?></p>
    </div>
</body>
</html>
