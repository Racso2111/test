<?php

class Vehiculo
{
    var $moto = array();

    function carga($fich, $matri, $marca, $precio, $tipo)
    {
        $fichero = fopen($fich, "a");
        fputs($fichero,"$matri\t$marca\t$precio\t$tipo\n");
        fclose($fichero);
    }
    function paso($fich){
        $fichero = fopen($fich, "r");
        $coche = fopen("coches.txt","w");
        fscanf($fichero,"%s\t%s\t%d\t%s\n", $matri,$marca,$precio,$tipo);
        while (!feof($fichero)){
            if ($tipo=='c'){
                fputs($coche,"$matri\t$marca\t$precio\n");
            }
            else{
                $this->moto[]=[$matri,$marca,$precio];
            }
            fscanf($fichero,"%s\t%s\t%d\t%s\n", $matri,$marca,$precio,$tipo);
        }
        fclose($fichero);
        fclose($coche);
    }
}