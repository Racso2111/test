<?php

//include "primero.php";

$array = [1, 4, 5, 6, "rasco se la come"];
$array[2] = "RACSO"; // reemplace el valor
$array[5] = 4; // agregue una ultima posicion, tener cuidado si es una mas que la ultima, eso fallaria
$array[] = 5; // mete en la ultima posicion

// bucle que recorre todos los elementos del array y los muestra
for ($i=0; $i<count($array); $i++){
    echo $array[$i] . "<br>";
}

// crear un array con 10 numeros aleatorios
$array = []; // lo pongo para decir que va a ser un array y esta vacio
$array = array(); // lo mismo pero con el "constructor" de un array
for ($i=0; $i<10; $i++){
    $array[] = rand(10, 99);
}

// mostrar todo el contenido de un array, ya sea de una o de n dimensiones
print_r($array);

echo "<br><br>";

// la forma de pedro de mostrarlo seria
for ($i=0; $i<count($array); $i++){
    echo $array[$i] . " | ";
}


// array de dos dimensiones de 10x10 con numeros aleatorios
$bidi = [[]];
for ($i=0; $i<10; $i++){ // te marca la linea
    for ($j=0; $j<10; $j++){ // te marca la columna
        $bidi[$i][$j] = rand(10, 99);
    }
}

echo "<br><br>";

// como mostrar la bidi
for ($i=0; $i<count($bidi); $i++){ // te marca la linea, count(bidi) me da la cantidad de filas
    for ($j=0; $j<count($bidi[$i]); $j++){ // te marca la columna, este count me da el largo de cada una de las filas
        echo $bidi[$i][$j], " | ";
    }
    echo "<br>";
}

// sacar la diagonal de la matriz
for ($i=0; $i<count($bidi); $i++){ // te marca la linea, count(bidi) me da la cantidad de filas
    for ($j=0; $j<count($bidi[$i]); $j++){ // te marca la columna, este count me da el largo de cada una de las filas
        if ($i==$j){
            echo $bidi[$i][$j];
        }
    }
    echo "<br>";
}

for ($i=0; $i<count($bidi); $i++){ // te marca la linea, count(bidi) me da la cantidad de filas
    echo $bidi[$i][$i]. " | ";
}


// Crear una matriz bidi donde guardemos ventas de articulos
function pedidos($numped){
    $lista = [[]];
    for ($i=0; $i<$numped; $i++){ // te marca la linea
        for ($j=0; $j<4; $j++){ // te marca la columna
            $lista[$i][$j] = rand(0, 9);
        }
    }
    return $lista;
}
function mostrarbidimen($array){
    for ($i=0; $i<count($array); $i++){ // te marca la linea, count(bidi) me da la cantidad de filas
        for ($j=0; $j<count($array[$i]); $j++){ // te marca la columna, este count me da el largo de cada una de las filas
            echo $array[$i][$j], " | ";
        }
        echo "<br>";
    }
}

function mostrarpedido($array){
    echo "<table style='border-collapse: collapse; border: 1px solid black'>
        <tr style='border-collapse: collapse; border: 1px solid black'>
            <th style='border-collapse: collapse; border: 1px solid black; padding: 5px'>Num pedido</th>
            <th style='border-collapse: collapse; border: 1px solid black; padding: 5px'>agua</th>
            <th style='border-collapse: collapse; border: 1px solid black; padding: 5px'>patatas</th>
            <th style='border-collapse: collapse; border: 1px solid black; padding: 5px'>monster</th>
            <th style='border-collapse: collapse; border: 1px solid black; padding: 5px'>escudo</th>
        </tr>";

    for ($i=0; $i<count($array); $i++){ // te marca la linea, count(bidi) me da la cantidad de filas
        echo "<tr style='border-collapse: collapse; border: 1px solid black'>";
        echo "<td style='border-collapse: collapse; border: 1px solid black; padding: 5px'>". ($i+1) ."</td>";
        echo "<td style='border-collapse: collapse; border: 1px solid black; padding: 5px'>". $array [$i][0] ."</td>";
        echo "<td style='border-collapse: collapse; border: 1px solid black; padding: 5px'>". $array [$i][1] ."</td>";
        echo "<td style='border-collapse: collapse; border: 1px solid black; padding: 5px'>". $array [$i][2] ."</td>";
        echo "<td style='border-collapse: collapse; border: 1px solid black; padding: 5px'>". $array [$i][3] ."</td>";
        echo "</tr>";
        echo "<br>";
    }
    echo "</table>";
}

echo "<h2>pedidos</h2>";
$ped= pedidos(7);
mostrarpedido($ped);
mostrarbidimen($ped);
print ("Hola");