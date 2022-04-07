<?php
    if($_SERVER["REQUEST_METHOD"] !== "POST"){
        header("Location: 405subida.html");
    }

    echo "<strong>Nombre -></strong> {$_FILES["archivo"]["name"]} <br>";
    echo "<strong>Anchura -></strong> {$_POST["anchura"]}<br>";
    echo "<strong>Altura -></strong> {$_POST["altura"]}<br>";
