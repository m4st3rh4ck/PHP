<?php

//Constantes en php
//Progrma que convierte unidades de medidas

define('LIBRA', 2.020462); //define('NOMBRE', valor);
define('PULGADA', 0.393701);

//Las constantes en hp deben de llevar un nombre en mayusculas por convencion

//Variables enteras a convertir
$cm = 50;
$kilo = 5;

//Conversion
echo $cm * PULGADA . "\n";
echo $kilo * LIBRA;

?>
