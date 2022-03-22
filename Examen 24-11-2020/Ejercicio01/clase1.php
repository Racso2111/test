<?php
function TANGARINA($letra)
{
    $letra = ord($letra);
    if ($letra > 64 & $letra < 91 or $letra > 96 & $letra < 123) {
        $letra = $letra + 3;
        if ($letra > 90 & $letra < 97 or $letra > 122) {
            $letra = $letra - 26;
        }
    }
    return chr($letra);
}

function LEER($cadena)
{
    $frase = "";
    for ($i = 0; $i < strlen($cadena); $i++) {
        $letra = $cadena[$i];
        $codifica = TANGARINA($letra);
        $frase .= $codifica;
    }
    return $frase;
}

function SALIDA($frase)
{
    echo "La frase codificada es:" . "<p>$frase</p>";
}

function MATRIZSALIDA($frase)
{
    $vocales = array("A","E","I","O","U","a","e","i","o","u");
    $matrizsalida = array(array());
    for ($i = 0; $i < strlen($frase); $i++) {
        $n = substr($frase, $i, 1);
        if (in_array($n, $vocales)) {
            $matrizsalida[0][] = $n;
        } else {
            $matrizsalida[1][] = $n;
        }
    }
    return $matrizsalida;
}

function SALIDA2($cadena)
{
    echo "<p>La frase sin cifrar es: $cadena</p>";
}