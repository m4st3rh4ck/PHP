<?php
// Metodos en PHP

// Creación de la clase
class Estudiante
{
    public $nombre;
    public $n_cuenta;
    public $licenciatura;
    
    // Métodos
    public function estudiar()
    {
        echo $this->nombre . " está estudiando.\n";
    }
    // Métodos
    public function tomar()
    {
        echo $this->nombre . " de " . $this->licenciatura . " se fue a tomar.\n";
    }
}

// Creación del objeto Gabriel
$estudiante1 = new Estudiante();
$estudiante1->nombre = "Gabriel";
$estudiante1->n_cuenta = "320151772";
$estudiante1->licenciatura = "Matemáticas Aplicadas y Computación";

// Mostrar información del objeto Gabriel
echo "Nombre: " . $estudiante1->nombre . "\n";
echo "Número de Cuenta: " . $estudiante1->n_cuenta . "\n";
echo "Licenciatura: " . $estudiante1->licenciatura . "\n\n";

// Métodos estudiar() y tomar() para Gabriel
$estudiante1->estudiar();
$estudiante1->tomar();

// Creación del objeto Angel
$estudiante2 = new Estudiante();
echo "\n";
$estudiante2->nombre = "Angel";
$estudiante2->n_cuenta = "277151023";
$estudiante2->licenciatura = "Fisica y Matemáticas";

// Mostrar información del objeto Angel
echo "Nombre: " . $estudiante2->nombre . "\n";
echo "Número de Cuenta: " . $estudiante2->n_cuenta . "\n";
echo "Licenciatura: " . $estudiante2->licenciatura . "\n\n";

// Métodos estudiar() y tomar() para Angel
$estudiante2->estudiar();
$estudiante2->tomar();
?>
