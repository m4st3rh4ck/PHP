<?php
echo "1.- Saludo" . "\n";
echo "2.- Mensaje 1" . "\n";
echo "3.- Mensaje 2" . "\n";
echo "4.- Despedida" . "\n" ;
echo "5.- Salir" . "\n";
do
{
echo "\n" . "Selecciona una opcion: ";
fscanf(STDIN, "%d", $mensaje);
switch($mensaje)
{
    case 1:
        echo "Es el 05/01/2025, tengo 20 años...";
        break;
    
    case 2:
        echo "Estoy estudianto intensivamente en multiples cursos de programacion y TI, " . "\n" .
        "con el objetivo de tener una mejor vida en el futuro y darle una mejor vida a mi familia";
        break;
    
    case 3:
        echo "Yo no pierdo, si pierdo, nada de lo que he hecho tendra sentido, por eso, yo no puedo fracasar" . "\n" .
        "Y si llego a fracasar, lo volvere a intentar hasta que lo consiga ";
        break;
        
    case 4:
        echo "Cumplire mi objetivo porque mi Dios me bendice, si Dios esta conmigo ¿Quien contra mi?";
        break;
    
    case 5:
        echo "Fin del Programa";
        break; 
        
    default:
        echo "Opcion Invalida";
}

}while($mensaje != 5);
?>
