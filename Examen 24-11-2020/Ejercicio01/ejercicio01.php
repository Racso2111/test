<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="ejercicio01.php" method="post">
    <label>Frase <br>
        <textarea name="cadena"></textarea><br>
    </label>
    <input type="submit" value="Codificar"><br><br>
</form>
</body>
</html>
<?php
include "clase1.php";
if ($_POST) {
    $cadena = $_POST["cadena"];
    $codificada = LEER($cadena);
    SALIDA($codificada);
    $matrizsalida = MATRIZSALIDA($codificada);
    for ($i = 0; $i < count($matrizsalida); $i++) {
        if ($i == 0)
            echo "Vocales: | ";
        else
            echo "Consonantes: | ";

        for ($j = 0; $j < count($matrizsalida[$i]); $j++) {
            echo $matrizsalida[$i][$j], " | ";
        }
        echo "<br>";
    }
    SALIDA2($cadena);
}
