<?php
    $arrayNums = [];
    $max = 0;
    $min = 100;

    for($i=0; $i < 33; $i++) {
        $arrayNums[] = rand(0,100);

        if($arrayNums[$i] > $max) {
            $max = $arrayNums[$i];
        } else if($arrayNums[$i] < $min) {
            $min = $arrayNums[$i];
        }
    }

    $media = array_sum($arrayNums) / count($arrayNums) -1;
?>

<!doctype html>
<html lang="es">
<head>
    <title>232</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <ul>
        <?php foreach($arrayNums as $valor) : ?>
            <li><?=$valor?></li>
        <?php endforeach; ?>
    </ul>
    <h3>Número más alto: <?=$max?></h3>
    <h3>Número más pequeño: <?=$min?></h3>
    <h3>Media: <?=number_format($media, "2")?></h3>
</body>
</html>
