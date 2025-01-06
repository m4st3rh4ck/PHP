<?php
//Do-While
do //La sintaxis de do-while en php es la misma que en C
{
    /*
    Programa que se ejecuta hasta que un numero negativo
    sea ingresado
    */
    echo "Introcue un numero: ";
    fscanf(STDIN, "%d", $numero);
    
    echo "El numero introducido fue: " . $numero . "\n"; 
    
}while($numero >= 0);

echo "Numero negativo detectado";

?>
