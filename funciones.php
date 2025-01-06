<?php
function hora() //Funcion para mostrar fecha y hora
{
    $hora = date("Y-m-d H:i:s"); //date() es para mostra la fecha y hora
    echo "Y la hora actual es: " . $hora . "\n"; 
}

function saludo() // Una funcion en php se declara con la palabra "function"
{
    echo "Hola, las funciones en PHP son similares a las de JavaScript" . "\n"; 
}

saludo();
hora();

?>
