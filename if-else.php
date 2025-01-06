<?php
//if-else en php
echo "Ingrese un numero: ";
fscanf(STDIN, "%d", $numero1); //sintaxis para pedir datos desde el teclado, casi similar al de c
echo "Ingrese otro numero: ";
fscanf(STDIN, "%d", $numero2);

//if-else
if($numero1 != $numero2)
{
    echo $numero1 . " es distinto a " . $numero2;
}else{

    echo $numero2 . " es igual a " . $numero1; 
}
?>
