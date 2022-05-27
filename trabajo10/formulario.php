<?php
//Capturo datos del form
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$fechaNacimiento=$_POST['date'];
$sexo=$_POST["sexo"];
//validacion de que DNI sea un numero
if (is_numeric($_POST["dni"])) {
    $dni= $_POST["dni"]; 
}
//Declaro el arreglo colores
$colores = array ();



//Valido si el checkbox no es nulo, si no lo es pusheo
/*if(isset($_POST["verde"])){
    array_push($colores,"verde");
};
if(isset($_POST["amarillo"])){
    array_push($colores,"amarillo");
};
if(isset($_POST["azul"])){
    array_push($colores,"azul");
};
if(isset($_POST["rojo"])){
    array_push($colores,"rojo");
};*/



$indices = array ("verde","amarillo","azul","rojo");
foreach($indices as &$indice){
    if (isset($_POST[$indice])) {
        array_push($colores,$indice);
    }
}




//Muestro resultados en pantalla
echo "Nombre: ".$nombre."<br><br>";
echo "Apellido: ".$apellido."<br><br>";
echo "DNI: ".$dni."<br><br>";
echo "Fecha de nacimiento: ".$fechaNacimiento."<br><br>";
echo "Sexo: ".$sexo."<br><br>";
echo "Colores:<br>";
foreach($colores as &$color){echo " -".$color."<br>";}

?>


