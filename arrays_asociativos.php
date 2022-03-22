<?php
$persona = array(
    "nombre" => "Oscar",
    "apellido" => "Moreno",
    "edad" => 22,
    "altura" => 175
);

// quiero mostrar el nombre
echo $persona["nombre"] . "<br>";

print_r($persona);
echo "<br>";

// como recorremos los arrays asociativos y sacamos los valores
foreach ($persona as $valor){
    echo $valor . "<br>";
}

// quiero mostrar las claves y los valores
foreach ($persona as $clave => $valor){
    echo "$clave: $valor <br>";
}

// array asociativo de dos dimensiones (bidi)
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


foreach ($familiaOscar as $rango => $integrante){
    echo "<h3>$rango</h3>";
    foreach ($integrante as $caracteristica => $dato) {
        echo "$caracteristica: $dato <br>";
    }
}
