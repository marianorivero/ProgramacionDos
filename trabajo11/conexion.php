<?php
$dni = $_POST["dni"];
$password = $_POST["password"];
//$password = $_POST["password"];


$conexion = mysqli_connect("localhost","root","","registro");
$consulta = "SELECT * FROM `personas` WHERE `dni`= '{$dni}' AND `password` = '{$password}'";
$res = mysqli_query($conexion,$consulta);

$datos = mysqli_fetch_all($res,MYSQLI_ASSOC); //buscar fetch_row

if (!empty($datos)) {
    echo json_encode($datos);
}else{
    $vacio=false;
    echo json_encode($vacio);
}

// encriptar:
// $hash = password_hash($password, PASSWORD_DEFAULT)
// verificar:
// if( password_verify($password, $hash) ){
//     //las contraseñas coinciden
// }else{
//     //contraseñas no coinciden
// }


// if( password_verify($datos[0]->password, $hash) ){
//     //las contraseñas coinciden
// }else{
//     //contraseñas no coinciden
// }

?>