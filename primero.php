<?php
echo "<h2> Hola mundo </h2>";

$variable = 5;
$variable = 5.6;
$variable = "hola";

echo "<p>" . $variable . "</p>";
$num1 = 5;
$num2 = 5;
if ($num1 >= $num2) {
    echo "<p>El mayor es $num1</p>";
    echo "if";
} else {
    echo "<p>El mayor es $num2</p>";
    echo "else";
}
$num = rand(-10, 10);
switch ($num) {
    case 1:
    case 2:
    case 3:
    case 4:
        echo "<p>Suspenso $num</p>";
        break;
    case 5:
        echo "<p>Suficiente $num</p>";
        break;
    case 6:
    case 7:
    case 8:
        echo "<p>Aprobado $num</p>";
        break;
    case 9:
    case 10:
        echo "<p>Excelente $num</p>";
        break;
    default:
        echo "<p>Nota fuera de rango $num</p>";
        break;
}

// comprobar si un numero es par o impar, utilizamos el modulo % que nos da el resto de la division
$num1 = rand(1, 100);
if ($num1 % 2 == 0) {
    echo "<p>Es par $num1</p>";
} else {
    echo "<p>Es impar $num1</p>";
}

//ver si un numero es multiplo de otro, hago minumero%numero
if ($num1 % 7 == 0) {
    echo "<p>Es multiplo de 7</p>";
} else {
    echo "<p>No es multiplo de 7</p>";
}


for ($i = 0; $i < 10; $i += 2) {
    echo $i . " | ";
}

echo "<br>";

$contador = 0;
while ($contador < 10) {
    echo $contador . " | ";
    $contador++;
}

echo "<br>";

$contador = 0;
do {
    echo $contador . " | ";
    $contador++;
} while ($contador < 10);

// Funcion que reciba dos numeros, me los sume y lo muestre
//funcion que recibe y no retorna nada
function suma($num1, $num2)
{
    $resultado = $num1 + $num2;
    echo "<p>El resultado de la suma es: $resultado</p>";
}

suma(4, 7);
suma($num1, $num2);

//funcion que no recibe ni retorna
function saludo()
{
    echo "<h3>HOLA!</h3>";
}

saludo();

// function que recibe y retorna
function suma2($num1, $num2)
{
    return $num2 + $num1;
}

$resSuma = suma2(3, 10);
echo "<p>El resultado de la suma retornada es: $resSuma</p>";

//funcion que no recibe nada pero si retorna
function miPi()
{
    return 4.14;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Ejercicios

echo "<h3>EJERCICIOS</h3>";
//1.Introducir un número y determinar si está comprendido entre 1 y 10.
echo "<h1>1.</h1>";
function entre1y10($num)
{
    if ($num > 0 && $num < 10) {
        echo "<p>El nº $num está entre el 1 y el 10</p>";
    } else {
        echo "<p>El nº $num no está entre el 1 y el 10</p>";
    }
}

entre1y10(0);

//2.Introduce un número y calcula si es positivo o negativo.
echo "<h1>2.</h1>";
function signo($num)
{
    if ($num > 0) {
        echo "<p>El nº $num es positivo</p>";
    } else {
        if ($num == 0) {
            echo "<p>El nº $num es neutro</p>";
        } else {
            echo "<p>El nº $num es negativo</p>";
        }
    }
}

signo(-3);

//3.Introduce tres números y determina cuál es el mayor.
echo "<h1>3.</h1>";
function mayor($num1, $num2, $num3)
{
    echo "El nº mayor es el " . max($num1, $num2, $num3);
}

mayor(1, 4, 2);

//4.Introduce tres números y muéstralos ordenados de menor a mayor.
echo "<h1>4.</h1>";
function orden($num1, $num2, $num3)
{
    if ($num1 > $num2 && $num1 > $num3) {
        if ($num2 > $num3) {
            echo "El orden de menor a mayor es $num3,$num2,$num1";
        } else {
            echo "El orden de menor a mayor es $num2,$num3,$num1";
        }
    }
    if ($num2 > $num1 && $num2 > $num3) {
        if ($num1 > $num3) {
            echo "El orden de menor a mayor es $num3,$num1,$num2";
        } else {
            echo "El orden de menor a mayor es $num1,$num3,$num2";
        }
    }
    if ($num3 > $num2 && $num3 > $num1) {
        if ($num2 > $num1) {
            echo "El orden de menor a mayor es $num1,$num2,$num3";
        } else {
            echo "El orden de menor a mayor es $num2,$num1,$num3";
        }
    }
}

orden(2, 1, 4);

//5.Introducir una nota numérica y devolver Suficiente, Notable, Bien, con switch.
echo "<h1>5.</h1>";
function nota($nota)
{
    switch ($nota) {
        case 1:
        case 2:
        case 3:
        case 4:
            echo "<p>Suspenso $nota</p>";
            break;
        case 5:
            echo "<p>Suficiente $nota</p>";
            break;
        case 6:
        case 7:
        case 8:
            echo "<p>Aprobado $nota</p>";
            break;
        case 9:
        case 10:
            echo "<p>Excelente $nota</p>";
            break;
        default:
            echo "<p>Nota fuera de rango $nota</p>";
            break;
    }
}

nota(1);

//6.Programa que imprima los números impares comprendidos entre 100 y 200.
echo "<h1>6.</h1>";
function impar()
{
    for ($i = 101; $i < 200; $i += 2) {
        echo "$i | ";
    }
}

impar();

//7. Programa que muestre todos los múltiplos de 3 comprendidos entre 1 y 100.
echo "<h1>7.</h1>";
function multiplo3()
{
    for ($i = 1; $i < 100; $i++) {
        if ($i % 3 == 0) {
            echo "$i | ";
        }
    }
}

multiplo3();

//8. Calcular la suma de todos los múltiplos de cinco comprendidos entre 1 y 100.
echo "<h1>8.</h1>";
function sumamult($multi)
{
    $resultado = 0;
    for ($i = 1; $i < 100; $i++) {

        if ($i % $multi == 0) {
            $resultado = $resultado + $i;
        }
    }
    echo $resultado;
}

sumamult(5);

//9. Calcula la suma de todos los pares comprendidos entre 1 y 1000 y muéstralo.
echo "<h1>9.</h1>";
function sumapar()
{
    $resultado = 0;
    for ($i = 0; $i < 1001; $i += 2) {
        $resultado = $resultado + $i;
    }
    echo "<p>$resultado</p>";
}

sumapar();

function sumapar1()
{
    $resultado = 0;
    for ($i = 0; $i < 1001; $i++) {
        if ($i % 2 == 0) {
            $resultado = $resultado + $i;
        }
    }
    echo "<p>$resultado</p>";
}

sumapar1();

//10. Calcula la suma de todos los números comprendidos entre dos números introducidos por teclado.
echo "<h1>10.</h1>";
function sumatotal($num1, $num2)
{
    $resultado = 0;
    for ($i = $num1; $i <= $num2; $i++) {
        $resultado = $resultado + $i;
    }
    echo "<p>$resultado</p>";
}

sumatotal(1, 5);

//11.Introduce un número y calcula si es par o impar con bucles.
echo "<h1>11.</h1>";
function parono($num1)
{
    for ($i = 0; $i < 2; $i++) {
        if ($num1 % 2 == 0) {
            echo "<p>Es par $num1</p>";
        } else {
            echo "<p>Es impar $num1</p>";
        }
    }
}

parono(57);

//12.Introducir número y exponente y calcular la potencia usando bucles.
echo "<h1>12.</h1>";
function potencia($num, $exp)
{
    $resultado = 1;
    for ($i = 0; $i < $exp; $i++) {
        $resultado = $resultado * $num;
    }
    echo $resultado;
}

potencia(2, 4);

//18.Calcula el cuadrado de todos los números comprendidos entre dos números introducidos por teclado.
echo "<h1>18.</h1>";
function cuadrados($num1, $num2)
{
    $resultado = 0;
    for ($i = $num1; $i <= $num2; $i++) {
        $resultado = $i * $i;
        echo "$resultado | ";
    }
}

cuadrados(1, 5);

//19.Escribe un programa que calcule la multiplicación de dos números introducidos por teclado sin utilizar el operador * (usando sumas sucesivas).
echo "<h1>19.</h1>";
function multiplicacion($num1, $num2)
{
    $resultado = 0;
    for ($i = 0; $i < $num2; $i++) {
        $resultado = $resultado + $num1;
    }
    echo $resultado;
}

multiplicacion(2, 4);

//20. Realizar el programa que imprima 5 veces en la pantalla los números comprendidos entre 1 y 20 usando dos bucles.
echo "<h1>20.</h1>";
function bucles()
{
    $contador = 0;
    while ($contador < 5) {
        for ($i = 1; $i < 21; $i++) {
            echo "$i | ";
        }
        $contador++;
        echo "<br>";
    }
}

bucles();

//22. Realizar el programa que muestre por pantalla la tabla de multiplicar de un número dado. La salida del programa deberá ser de la siguiente forma:
echo "<h1>22.</h1>";
function tablamult($num){
    $resultado=0;
    for ($i = 1; $i <11; $i++){
        $resultado=$num * $i;
        echo "<p>$num * $i = $resultado</p>";
        $resultado=0;
    }
}

tablamult(5);

//23. Escribe un programa que reciba un número por teclado y una frase. El programa deberá mostrar esa frase por pantalla tantas veces como se le indique en el número.
echo "<h1>23.</h1>";
function frase($num,$frase){
    for ($i = 0; $i <$num; $i++){
        echo "<p>$frase</p>";
    }
}

frase(3,"Palos Kali y Escudo");





