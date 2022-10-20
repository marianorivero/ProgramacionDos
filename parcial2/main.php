<?php
require_once("Cuenta.php");
require_once("CuentaJoven.php");
require_once("Persona.php");

$persona = new Persona("Mariano Rivero", 24, 40635415);
//                                  nombre, edad, dni
$cuenta = new Cuenta ( $persona->getNombre(), 1000);
//                                 titular, cantidad

echo $cuenta->ingresar(1);
echo $cuenta->mostrar();
echo "<br>";
echo "<br>";


$aux= false;
if ($persona->getEdad()>=18) {
    $cuentaJoven = new CuentaJoven(0.1);
    $aux = $cuentaJoven->esTitularValido( $persona->getEdad() );
}

if ($aux) {
    echo $cuentaJoven->mostrar();
}else{
    echo "Cuenta no valida";
}

?>