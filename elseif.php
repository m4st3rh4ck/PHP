<?php
//elseif

echo "Ingrese un numero: ";
fscanf(STDIN, "%d", $numero1);
echo "Ingrese otro numero: ";
fscanf(STDIN, "%d", $numero2);

if($numero1 === $numero2)
{
    echo $numero1 . " es igual a " . $numero2;
} //Aunue "else if" funciona en php, la forma correcta es "elseif" //
  elseif ($numero1 > $numero2) 
  {
   echo $numero1 . " es mayor a " . $numero2;
  } 
    else
    {
        echo $numero2 . " es mayor a " . $numero1;
    }
?>
