<?php
echo "Ingresa un numero: ";
fscanf(STDIN, "%d", $numero);
echo "\n";

for($i = 0; $i <= 10; $i++)
{
    $resultado = $i * $numero;
    echo $i . " x " . $numero . " = " . $resultado . "\n";   
}

?>
