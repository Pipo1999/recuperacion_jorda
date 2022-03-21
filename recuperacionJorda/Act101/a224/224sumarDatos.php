<?php
    $cantidad = $_GET["cantidad"];
    $nums = [];

    for($i=1; $i<=$cantidad; $i++) {
        $nums[] = $_GET["num".$i];
    }
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Activitat 224</title>
</head>
<body>
<header>
    <h1>Suma total</h1>
</header>
<main>
    <p>La suma de todos los números es <?=array_sum($nums)?>.</p>
</main>
</body>
</html>