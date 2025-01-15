<?php

class Persona {
    //Atributos publicos de la clase
     public $nombre;
     public $edad;
     public $ocupacion;
     
     /*Declaracion del metodo constructor, los atributos deben inicializarce 
     de forma vacia si los valores se va a asignar por medio del teclado
     
     Si los atributos van a tener valores asignados por defecto , se asignan 
     directamente en el contructor*/
     function __construct($nombre = "", $edad = 0, $ocupacion = "")
     { 
         //Se debe usar " $this -> " en el contructor
         $this -> nombre = $nombre;
         $this -> edad = $edad;
         $this -> ocupacion = $ocupacion;
     }
     
     public function setter() {
         echo "Ingresa el nombre: ";
         fscanf(STDIN, "%s", $this -> nombre);
         echo "Ingresa la edad: ";
         fscanf(STDIN, "%d", $this -> edad);
         echo "Ingresa la ocupacion: ";
         fscanf(STDIN, "%s", $this -> ocupacion);
     }
     
     public function getter() {
         echo "Nombre: " . $this -> nombre;
         echo "\nEdad: " . $this -> edad;
         echo "\nOcupacion: " . $this -> ocupacion;
     }
}
 $persona1 = new Persona();
    echo $persona1 -> setter(); //Metodo setter() para asignar valores
    echo "\n";
    echo $persona1 -> getter(); //Metodo getter() para asignar valores
?>
