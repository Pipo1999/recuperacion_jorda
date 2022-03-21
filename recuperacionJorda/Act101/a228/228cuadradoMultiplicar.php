<!doctype html>
<html lang="es">
<head>
    <title>228</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel=stylesheet href=estilos.css type='text/css'>
</head>
<body>
    <table>
        <tr>
            <th>x</th>
            <?php for($i=0; $i<=10; $i++) : ?>
                <th><?=$i?></th>
            <?php endfor; ?>
        </tr>
        <?php for($j=0; $j<=10; $j++) : ?>
            <tr class="y">
                <th><?=$j?></th>
                <?php for($z=0; $z<=10; $z++) : ?>
                    <th class="result"><?=$j*$z?></th>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
