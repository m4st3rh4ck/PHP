<?php
class Persona
{
  public $nombre;
  public $edad;
  
  public function __construct($nombre = "", $edad = 0)
  {
      $this -> nombre = $nombre;
      $this -> edad = $edad;
  }
  
  function setter()
  {
      echo "Ingresa el Nombre: ";
      $this -> nombre = trim(fgets(STDIN));
      //fscanf no sirve porque guarda el texto introducido hasta el primer espacio
      //fgets guarda todo el texto introducido incluyendo espacios
      echo "Ingresa la Edad: ";
      fscanf(STDIN, "%d", $this -> edad);

  }
  function getter()
  {
      echo "Nombre: " . $this -> nombre;
      echo "\n"."Edad: " . $this -> edad;
  }
}
class Estudiante extends Persona
{
   public $carrera;
   public $semestre;
   public $n_cuenta;
   
   public function __construct($nombre = "", $edad = 0, $n_cuenta = "", $carrera = "", $semestre = "")
   {
       parent :: __construct($nombre, $edad);
       $this -> carrera = $carrera;
       $this -> semestre  = $semestre;
       $this -> n_cuenta = $n_cuenta;
   }
   
   public function setterE()
   {
       $this -> setter(); //Hereda el setter de Persona
       
       //Adicion de nuevos campos a setter
       echo "Ingresa tu numero de cuenta de estudiante: ";
       fscanf(STDIN, "%s", $this -> n_cuenta);
       echo "Ingresa la carrera a la que perteneces: ";
       $this -> carrera = trim(fgets(STDIN));
       echo "Ingresa el semestre que estas cursando: ";
       fscanf(STDIN, "%d", $this -> semestre);
   }
   
   public function getterE()
   {
       echo "\n";
       $this -> getter(); //Hereda el getter de Persona
       
       //Adicion de nuevos campos a getter
       echo "\n"."Numero de Cuenta: " . $this -> n_cuenta;
       echo "\n"."Carrera: " . $this -> carrera;
       echo "\n"."Semestre: " . $this -> semestre;
   }
}

class Profesor extends Persona{
    
    public $materia;
    public $n_cuenta;
    public $carrera;
    
    public function __construct($nombre = "", $edad = 0, $n_cuenta = "", $carrera = "", $materia = "")
    {
        parent :: __construct($nombre, $edad);
    }
    
    public function setterP()
    {
        $this -> setter(); //Hereda setter de Persona
        echo "Ingresa el Numero de Cuenta de Profesor: ";
        fscanf(STDIN, "%s", $this -> n_cuenta);
        echo "Ingresa la licenciatura donde se labora: ";
        $this -> carrera = trim(fgets(STDIN));
        echo "Ingresa la materia que se imparte: ";
        fscanf(STDIN, "%s", $this -> materia);
    }
    
    public function getterP()
    {
        echo "\n";
        $this -> getter(); //Hereda getter de Persona 
        
        echo "\n"."Numero de Cuenta: " . $this -> n_cuenta;
        echo "\n"."Licenciatura donde se labora: " . $this -> carrera;
        echo "\n"."Materia que se imparte: " . $this -> materia;
    }
}


$estudiante1 = new Estudiante;
$profesor1 = new Profesor;


echo "Introduce tu ROL [Profesor / Estudiante]: ";
fscanf(STDIN, "%s", $rol);

if($rol == "Profesor")
{
   $profesor1 -> setterP();
   $profesor1 -> getterP();
} elseif ($rol == "Estudiante") {
   $estudiante1 -> setterE();
   $estudiante1 -> getterE();
} else{
    echo "Error, intente de nuevo por favor";
}

?>
