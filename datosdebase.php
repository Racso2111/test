<?php

$database = new mysqli("127.0.0.1", "root", "", "test");

if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}

$database->query("drop table if exist rasco");
$database->query("create table rasco (id int primary key, frase text)");
$database->query("insert into rasco value(1, 'Palitos kali')");
$database->query("insert into rasco value(2, 'Cuchillo')");
$database->query("insert into rasco value(3, 'Escudo')");
$database->query("insert into rasco value(4, 'Machete')");
$database->query("insert into rasco value(5, 'Balistico')");

$resultado = $database->query("select * from rasco");

if ($resultado->num_rows > 0) {

    while ($linea = $resultado->fetch_assoc()) {
        echo "<p>id: " . $linea["id"] . ", contenido: " . $linea["frase"] . "</p>";
    }

} else {
    echo "<p>Sin  contenido</p>";
}


// Crear una tabla llamada diasSinCOD que guarde 10 numeros aleatorios. Luego que lea los valores de la tabla y me
// guarde los pares en un fichero y los impares en un array. Mostrar el contenido del fichero y del array
$database->query("drop table if exists nocod");
$database->query("create table nocod (dias int)");
for ($i = 0; $i < 12; $i++) {
    $database->query("insert into nocod value(" . rand(0, 31) . ")");
}
$resultado = $database->query("select * from nocod");
if ($resultado->num_rows > 0) {
    $fichero = fopen("pares.txt", "w");
    $impares = [];
    while ($linea = $resultado->fetch_assoc()) {
        $num = $linea["dias"];
        if ($num % 2 == 0) {
            fputs($fichero, "$num\n");
        } else {
            $impares[] = $num;
        }
    }
    fclose($fichero);
} else {
    echo "<p>Sin  contenido</p>";
}

// Contenido del fichero pares.txt
$fichero=fopen("pares.txt","r");
fscanf($fichero,"%d\n", $n);
echo "<h3>Fichero pares</h3>";
while(!feof($fichero)){
    echo $n . "<br>";
    fscanf($fichero,"%d\n", $n);
}
fclose($fichero);
// Contenido del array impares
echo "<h3>Array impares</h3>";
for ($i = 0; $i < count($impares); $i++) {
    echo $impares[$i] . "<br>";
}