<?php
$file=fopen("personas.txt","r");
fscanf($file,"%s\t%s\t%d\n",$nombre,$apellido,$edad);
while (!feof($file)){
    echo "<p>$nombre $apellido $edad</p>";
    fscanf($file,"%s\t%s\t%d\n",$nombre,$apellido,$edad);
}
fclose($file);