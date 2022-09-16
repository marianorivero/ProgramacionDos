<?php
/*
Hacer una pantalla donde se ingresen; nombre, apellido, dni, tipo(alumno o docente, si es
alumno setea un arancel de 500 y si es docente es 1.000), mostrar arancel, fecha de nacimiento y edad, 
cuando se envie hay que mostrar los datos.

Si es docente y mayor o igual 40 años tiene un 10% de descuento el arancel.
Si es alumno y menor o igual a 25 años tiene un 20% de descuento el arancel.

si es el cumple del alumno el arancel es $0. (comparar con la fecha actual con la funcion date())
si es el cumple del docente PAGA EL DOBLE.

Generar una clase padre PERSONA
Generar dos clases hijas: Docente y Alumno

*/

$nombre= $_POST["nombre"];
$apellido=$_POST["apellido"];
$dni=$_POST["dni"];;
$arancel=$_POST["arancel"];
$fechaNacimiento=$_POST["fechaNacimiento"];





?>