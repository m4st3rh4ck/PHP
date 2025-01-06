<?php
/*Se acercan las próximas elecciones estudiantiles en la universidad y te piden realizar un programa 
para verificar si un estudiante puede o no votar. Ten en cuenta que:
Debes usar una función con parámetros.
El estudiante debe tener mínimo 18 años para votar.*/
function validacion($nombre, $edad)
{
    if($edad < 18)
    {
        
        echo "El estudiante " . $nombre . " no puede votar, tiene " . $edad . " años, necesita tener 18 o mas";    
    
    } else{

          echo "El estudiante " . $nombre . " con " . $edad . " años, puede votar";

          }
}
echo "Ingresa el nombre del Estudiante: ";
fscanf(STDIN , "%s", $nombre);
echo "Ingresa la Edad: ";
fscanf(STDIN, "%d", $edad);
validacion($nombre, $edad);
?>
