<?php

// Modos de apertura de un fichero
// r - es de lectura
// w - modo escritura, pero cuando abre el fichero lo vacia, borra todo
// a - modo que agrega al final del fichero, mantiene el contenido

// Escribir en un fichero 10 numeros aleatorios
$fichero = fopen("numeros.txt", "w");
for ($i = 0; $i < 10; $i++) {
    $num = rand(10, 99);
    $num1 = rand(10, 99);
    $num2 = rand(10, 99);
    fputs($fichero, "$num\t$num1\t$num2\n");
}
fclose($fichero);

// como leer el contenido de numeros.txt
$fichero = fopen("numeros.txt", "r");
fscanf($fichero, "%d\t%d\t%d\n", $n1, $n2, $n3);
while (!feof($fichero)) {
    echo $n1 . " | " . $n2 . " | " . $n3 . "<br>";
    fscanf($fichero, "%d\t%d\t%d\n", $n1, $n2, $n3);
}
fclose($fichero);

$familiaOscar = array(
    "Padre" => array(
        "nombre" => "Jose",
        "apellido" => "Moreno",
        "edad" => 54,
        "altura" => 175
    ),
    "Madre" => array(
        "nombre" => "Lucia",
        "apellido" => "Moreno",
        "edad" => 52,
        "altura" => 175
    ),
    "Hijo" => array(
        "nombre" => "Oscar",
        "apellido" => "Moreno",
        "edad" => 22,
        "altura" => 175
    ),
);

// Pasar la informacion de los integrantes a un fichero donde cada linea tenga los datos de las personas
$familia = fopen("familia.txt", "w");
foreach ($familiaOscar as $integrante) {
    $nombre = $integrante["nombre"];
    $apellido = $integrante["apellido"];
    $edad = $integrante["edad"];
    $altura = $integrante["altura"];
    fputs($familia, "$nombre\t$apellido\t$edad\t$altura\n");
}
fclose($familia);

$familia = fopen("familia.txt", "r");
fscanf($familia, "%s\t%s\t%d\t%d\n", $nombre, $apellido, $edad, $altura);
while (!feof($familia)){
    echo "$nombre, $apellido, $edad, $altura<br>";
    fscanf($familia, "%s\t%s\t%d\t%d\n", $nombre, $apellido, $edad, $altura);
}
fclose($familia);
