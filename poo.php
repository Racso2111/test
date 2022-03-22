<?php

class Persona
{

    var $nombre;
    var $apellido;
    var $altura;
    var $edad;
    var $setso;

    function Persona($nombre, $apellido){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->altura = 0;
        $this->edad = 0;
        $this->setso = "HdC";
    }

    function setAltura($altura){
        $this->altura = $altura;
    }

    function setEdad($edad){
        $this->edad = $edad;
    }

    function setSetso($setso){
        $this->setso = $setso;
    }

    function mostrarInfo(){
        echo "<p> Mi nombre es $this->nombre $this->apellido </p>";
    }

}

$oscar = new Persona("Oscar", "Moreno");
$oscar->mostrarInfo();

class Alumno extends Persona{
    var $matricula;

    function Alumno($matricula, $nombre, $apellido){
        parent::Persona($nombre, $apellido);
        $this->matricula = $matricula;
    }

    function mostrarInfo()
    {
        parent::mostrarInfo();
        echo "<p>Matricula: $this->matricula</p>";
    }

}

$aluOscar = new Alumno(69,"Oscar Homo", "Moreno");
$aluOscar->mostrarInfo();
