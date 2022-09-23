<?php
require_once("Alumno.php");
require_once("Docente.php");
define("TIPOS", ["Alumno","Docente"]);

define("TIPOPERSONA", $_POST["tipoPersona"]);
define("NOMBRE",ucwords($_POST["nombre"]));
define("APELLIDO", ucwords($_POST["apellido"]));
define("DNI",$_POST["dni"]);
define("ARANCEL", $_POST["arancel"]);
$fechaNacimiento= new DateTime($_POST["fechaNacimiento"]);

foreach (TIPOS as &$tipo) {
    if ($tipo == TIPOPERSONA) {
        $persona = new $tipo (NOMBRE,APELLIDO, ARANCEL, DNI, TIPOPERSONA, $fechaNacimiento);
        $persona->descuento();
        break;
    }
}

?>













<!-- Hacer una pantalla donde se ingresen; nombre, apellido, dni, tipo(alumno o docente, si es
alumno setea un arancel de 500 y si es docente es 1.000) y fecha de nacimiento, 
cuando se envie hay que mostrar los datos y la edad.

Si es alumno y menor o igual a 25 años tiene un 20% de descuento el arancel.
Si es docente y mayor o igual 40 años tiene un 10% de descuento el arancel.

si es el cumple del alumno el arancel es $0.
si es el cumple del docente PAGA EL DOBLE. -->


<!-- // switch ($tipoPersona) {
//     case 'Alumno':
//         $persona = new Alumno ($nombre,$apellido,$fechaNacimiento,$arancel,$dni,$tipoPersona);
//         break;

//     case 'Docente':
//         $persona = new Docente ($nombre,$apellido,$fechaNacimiento,$arancel,$dni,$tipoPersona);
//         break;
// } -->
