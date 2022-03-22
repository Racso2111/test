<?php

class Triangulo
{
    var $base;
    var $h;
    var $area;

    function __construct($base, $h)
    {
        $this->base = $base;
        $this->h = $h;
        $this->area = ($base * $h) / 2;
    }
}

class Paralelogramo
{
    var $base;
    var $h;
    var $area;

    function __construct($base, $h)
    {
        $this->base = $base;
        $this->h = $h;
        $this->area = ($base * $h);
    }
}

class Rectangulo
{
    var $base;
    var $h;
    var $area;

    function __construct($base, $h)
    {
        $this->base = $base;
        $this->h = $h;
        $this->area = ($base * $h);
    }
}

class Cuadrado extends Rectangulo
{
    function __construct($lado)
    {
        parent::__construct($lado, $lado);
    }
}

class Rombo
{
    var $D;
    var $d;
    var $area;

    function __construct($D, $d)
    {
        $this->D = $D;
        $this->d = $d;
        $this->area = ($D * $d) / 2;
    }
}

class RomboDeltoide extends Rombo
{
    function __construct($D, $d)
    {
        parent::__construct($D, $d);
    }
}

class Trapecio
{
    var $B;
    var $b;
    var $h;
    var $area;

    function __construct($B, $b, $h)
    {
        $this->B = $B;
        $this->b = $b;
        $this->h = $h;
        $this->area = (($B + $b) * $h) / 2;
    }
}

class Circulo
{
    var $r;
    var $area;

    function __construct($r)
    {
        $this->r = $r;
        $this->area = pi() * $r * $r;
    }
}

class Pedro
{
    var $cuadrado, $circulo;

    function __construct($lado, $r)
    {
        $this->cuadrado = new Cuadrado($lado);
        $this->circulo = new Circulo($r);
    }
    function mostrarfigura(){
        echo "<p>El área del cuadrado es: ".$this->cuadrado->area."</p>";
        echo "<p>El área del círculo es: ".$this->circulo->area."</p>";
    }
}

class Ana
{
    var $paralelogramo, $circulo,  $rectangulo, $triangulo;

    function __construct($base, $h , $r)
    {
        $this->paralelogramo = new Paralelogramo($base, $h);
        $this->circulo = new Circulo($r);
        $this->rectangulo = new Rectangulo($base, $h);
        $this->triangulo = new Triangulo($base,$h);
    }
    function mostrarfigura(){
        echo "<p>El área del cuadrado es: ".$this->paralelogramo->area."</p>";
        echo "<p>El área del círculo es: ".$this->circulo->area."</p>";
        echo "<p>El área del rectángulo es: ".$this->rectangulo->area."</p>";
        echo "<p>El área del triángulo es: ".$this->triangulo->area."</p>";
    }
}

class Luis
{
    var $rombo, $circulo, $rombodeltoide, $trapceio;

    function __construct($D, $d, $B, $b, $h, $r)
    {
        $this->rombo = new Cuadrado($D, $d);
        $this->circulo = new Circulo($r);
        $this->rombodeltoide = new RomboDeltoide($D, $d);
        $this->trapceio = new Trapecio($B, $b, $h);
    }
    function mostrarfigura(){
        echo "<p>El área del cuadrado es: ".$this->rombo->area."</p>";
        echo "<p>El área del círculo es: ".$this->circulo->area."</p>";
        echo "<p>El área del romboide es: ".$this->rombodeltoide->area."</p>";
        echo "<p>El área del trapecio es: ".$this->trapceio->area."</p>";
    }
}

$pedro=new Pedro(7,6);
$pedro->mostrarfigura();
$ana=new Ana(7,8,6);
$ana->mostrarfigura();
$luis=new Luis(7,8,7,8,5,6);
$luis->mostrarfigura();