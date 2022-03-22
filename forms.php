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
    <form action="forms.php" method="post">
        <label>Nombre
            <input type="text" name="nombre">
        </label>
        <br>
        <label>Apellido
            <input type="text" name="apellido">
        </label>
        <br>
        <label>Edad
            <input type="number" name="edad">
        </label>
        <br>
        <input type="submit" value="Enviar"><br>
        <button><a href="mostrarPersonas.php">Mostrar datos</a></button>
    </form>
</body>
</html>

<?php

if ($_POST){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];

    // guardar en un fichero los datos de las personas

    $file = fopen("personas.txt", "a");
    fputs($file, "$nombre\t$apellido\t$edad\n");
    fclose($file);

}
