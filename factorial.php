<?php
//Programa que calcula el factorial de cualquier numero
do{
    echo "Ingresa un numero: ";
    fscanf(STDIN, "%d", $numero);
    
    if($numero < 0)
    {
        echo "Error, no existe el factorial de numeros negativos\n";
    }
    elseif($numero == 0)
    {
        echo "Por definicion, el factorial de 0 es 1\n";
    }
    else{
        $factorial = 1; // Reinicia el factorial para cada nuevo número
        for($i = 1; $i <= $numero; $i++)
        {
            $factorial *= $i; // Calcula el factorial
        }
        echo "El factorial de " . $numero . " es " . $factorial . "\n"; // Salida con salto de línea
    }
}while($numero >= 0);
?>
