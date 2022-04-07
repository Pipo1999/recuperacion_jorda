<?php
echo $_SERVER["PHP_SELF"]."<br>";
echo $_SERVER["SERVER_SOFTWARE"]."<br>";
echo $_SERVER["SERVER_NAME"]."<br>";

echo $_SERVER["REQUEST_METHOD"]."<br>";
echo $_SERVER["REQUEST_URI"]."<br>";
echo $_SERVER["QUERY_STRING"]."<br>";

echo $_SERVER["HTTP_REFERER"]."<br>";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>401</title>
</head>
<body>
    <form action="401server.php" method="get">
        <label for="field">Texto: </label>
        <input type="text" id="field" name="field">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
