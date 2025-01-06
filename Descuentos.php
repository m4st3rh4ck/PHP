<?php
echo "Introduce el nombre del cliente: ";
fscanf(STDIN, "%s", $nombre); //Introduccion del nombre por medio del teclado
echo "\n";
echo "Introduce el valor de la compra: ";
fscanf(STDIN, "%d", $compra); //Introducion del valor por medio del teclado
echo "\n";

//Condiciones
if ($compra < 50) {
    $descuento = $compra * 0.05;
} elseif ($compra >= 50 && $compra < 100) {
    $descuento = $compra * 0.10;
} elseif ($compra >= 100 && $compra <= 250) {
    $descuento = $compra * 0.15;
} elseif ($compra > 250 && $compra <= 400) {
    $descuento = $compra * 0.20;
} else {
    $descuento = 0;
}

//Calculo del descuento al precio original
$precio_final = $compra - $descuento;

//Impresion del Nombre, Precio y Descuento
echo "Cliente: " . $nombre . "\n";
echo "Valor de la Compra sin descuento: " . $compra . "\n";
echo "Valor de la Compra con descuento: " . $precio_final . "\n";
?>
