<?php
require_once("Alumno.php");
require_once("Docente.php");

$tipoPersona= $_POST["tipoPersona"];
$nombre= ucwords($_POST["nombre"]);
$apellido=ucwords($_POST["apellido"]);
$dni= $_POST["dni"]; 
$arancel=$_POST["arancel"];
$fechaNacimiento= new DateTime($_POST["fechaNacimiento"]);


switch ($tipoPersona) {
    case 'Alumno':
        $persona = new Alumno ($nombre,$apellido,$fechaNacimiento,$arancel,$dni,$tipoPersona);
        $persona->descuento();
        break;

    case 'Docente':
        $persona = new Docente ($nombre,$apellido,$fechaNacimiento,$arancel,$dni,$tipoPersona);
        $persona->descuento();
        break;
}
?>













<!-- Hacer una pantalla donde se ingresen; nombre, apellido, dni, tipo(alumno o docente, si es
alumno setea un arancel de 500 y si es docente es 1.000) y fecha de nacimiento, 
cuando se envie hay que mostrar los datos y la edad.

Si es alumno y menor o igual a 25 años tiene un 20% de descuento el arancel.
Si es docente y mayor o igual 40 años tiene un 10% de descuento el arancel.

si es el cumple del alumno el arancel es $0.
si es el cumple del docente PAGA EL DOBLE. -->
