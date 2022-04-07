<?php

if($_SERVER["REQUEST_METHOD"] !== "POST"){
    header("Location: 405subida.html");
}
    $archivo = $_FILES['archivo']['name'];
    $temp = $_FILES['archivo']['tmp_name'];
    $tipo = $_FILES["archivo"]["type"];
    $anchura = $_POST["anchura"];
    $altura = $_POST["altura"];

    copy($_FILES["archivo"]["tmp_name"], $_FILES["archivo"]["name"]);

    if(!(strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png"))){
        echo "Error: Formato incorrecto";
        header("Location: 405subida.html");
    }else{
        if (move_uploaded_file($temp, 'img/'.$archivo)) {
            echo "<img src='img/$archivo' width='$anchura' height='$altura'>";
        }
        else {
            echo '<div><p>Error al subir archivo.</p></div>';
        }
    }
