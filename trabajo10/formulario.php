<?php
//Capturo datos del form
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$fechaNacimiento=$_POST['date'];
$sexo=$_POST["sexo"];
//validacion de que DNI sea un numero
if (is_numeric($_POST["dni"])) {
    $dni= $_POST["dni"]; }


//Declaro el arreglo colores
$colores = array ();
//capturo checkbox
if (isset($_POST["colores"])) { //tambien se puede usar !empty
    foreach ($_POST["colores"] as $color) {array_push($colores,$color);}
} 

//Muestro resultados en pantalla
echo "<b>Nombre:</b> ".$nombre."<br><br>";
echo "<b>Apellido:</b> ".$apellido."<br><br>";
echo "<b>DNI:</b> ".$dni."<br><br>";
echo "<b>Fecha de nacimiento:</b> ".$fechaNacimiento."<br><br>";
echo "<b>Sexo:</b> ".$sexo."<br><br>";
echo "<b>Colores:</b> <br>";
foreach($colores as &$color){echo " -".$color."<br>";}
?>


