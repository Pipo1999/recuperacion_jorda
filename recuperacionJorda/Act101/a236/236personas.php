<?php
    $data = [
        [
            "Nombre" => "Pepe",
            "Altura" => 2.05,
            "Email" => "pepe@gmail.com"
        ],
        [
            "Nombre" => "Luis",
            "Altura" => 1.51,
            "Email" => "luis@gmail.com"
        ],
        [
            "Nombre" => "Ivan",
            "Altura" => 1.83,
            "Email" => "ivan@gmail.com"
        ],
        [
            "Nombre" => "Lucia",
            "Altura" => 1.67,
            "Email" => "lucia@gmail.com"
        ],
        [
            "Nombre" => "Maria",
            "Altura" => 1.75,
            "Email" => "maria@gmail.com"
        ]
    ];
?>

<!doctype html>
<html lang="es">
<head>
    <title>236</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel=stylesheet href=estilos.css type='text/css'>
</head>
<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Altura</th>
            <th>Email</th>
        </tr>
        <?php foreach($data as $campo) : ?>
        <tr>
            <?php foreach($campo as $key => $value) : ?>
                <td><?=$value?></td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
