<?php
//Clases en PHP

//Creacion de la clase
class Estudiante
{
    public $nombre;
    public $n_cuenta;
    public $licenciatura;
}

//Creacion del objeto
$estudiante1 = new Estudiante();

$estudiante1 -> nombre = "Gabriel";
$estudiante1 -> n_cuenta = "320151772";
$estudiante1 -> licenciatura ="Matematicas Aplicadas y Computacion";

//Creacion de otro objeto de la misma clase Estudiante
$estudiante2 = new Estudiante();

$estudiante2 -> nombre = "Angel";
$estudiante2 -> n_cuenta = "277151023";
$estudiante2 -> licenciatura = "Fisica y Matematicas";

//Mostrar informacion del objeto 1
echo "Nombre: " . $estudiante1 -> nombre . "\n";
echo "Numero de Cuenta: " . $estudiante1 -> n_cuenta . "\n";
echo "Licenciatura: " . $estudiante1 -> licenciatura . "\n";
echo "\n";
//Mostrar informacion del objeto 2
echo "Nombre: " . $estudiante2 -> nombre . "\n";
echo "Numero de Cuenta: " . $estudiante2 -> n_cuenta . "\n";
echo "Licenciatura: " . $estudiante2 -> licenciatura . "\n";
?>
