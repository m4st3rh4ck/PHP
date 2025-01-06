<?php
//Cuenta regresiva usando while
echo "Ingrese un numero: ";
fscanf(STDIN, "%d", $c_regresiva); 

while($c_regresiva > 0) //Condicion a cimplir de while
{
    echo $c_regresiva . "\n";
    $c_regresiva -= 1; //rgresion de 1 en 1
}

echo "Despegue";

?>
