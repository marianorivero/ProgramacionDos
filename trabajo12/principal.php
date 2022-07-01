<?php
include 'conexion.php';

$dni = $_POST["dni"];


$consulta = "SELECT * FROM `socios` WHERE `dni`= '{$dni}'";
$res = mysqli_query($conexion,$consulta);
$datos = mysqli_fetch_array($res,MYSQLI_NUM);

if (!empty($datos)) {
    echo ("Nombre: ".json_encode($datos[1])."<br>");
    echo ("Apellido: ".json_encode($datos[2])."<br>");
    echo ("Edad: ".json_encode($datos[3])."<br>");
    echo ("Facturas: ".json_encode($datos[4])."<br>");
    echo ("DNI: ".json_encode($datos[5])."<br>");
}else{
    echo "No se encontro la persona";
}


/**/



?>