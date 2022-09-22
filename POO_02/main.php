<?php
include_once("Alumno.php");
include_once("Docente.php");
include_once("edad.php");


$tipoPersona= $_POST["tipoPersona"];
$nombre= ucwords($_POST["nombre"]);
$apellido=ucwords($_POST["apellido"]);
$dni= $_POST["dni"]; 
$arancel=$_POST["arancel"];
$fechaNacimiento=$_POST["fechaNacimiento"];


//validar cumpleaños
$fechaActual = date("d-m");
$fechaCumpleaños = (substr($fechaNacimiento,-2))."-".(substr($fechaNacimiento,5,-3));



//edad.php
$edad = calcularEdad($fechaNacimiento);


switch ($tipoPersona) {
    case 'Alumno':

        $persona = new Alumno ($nombre,$apellido,$fechaNacimiento,$dni,$arancel,$tipoPersona);

        //valido el cumpleaños
        if ($fechaCumpleaños==$fechaActual) {
            //su es cumpleaños no paga
            $arancel=0;
        }elseif ($edad<=25) {
            //descuento 20%
            $arancel = $arancel-($arancel * 0.2);
        }

        echo($persona->info());
        echo("<b>Arancel Total:</b> $ {$arancel}"."<br>");
        echo("<b>Edad:</b> ".$edad);
        break;

    case 'Docente':

        $persona = new Docente ($nombre,$apellido,$fechaNacimiento,$dni,$arancel,$tipoPersona);

        //valido el cumpleaños
        if ($edad>=40) {
            //descuento del 10%
            $arancel = $arancel-($arancel * 0.1);
        }

        //si es su cumpleaños paga el doble
        if ($fechaCumpleaños==$fechaActual) {
            $arancel=$arancel*2;
        }
        
        echo($persona->info());
        echo("<b>Arancel Total:</b> $ {$arancel}"."<br>");
        echo("<b>Edad:</b> ".$edad);
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
