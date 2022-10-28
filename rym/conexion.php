<?php

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$especie = $_POST["especie"];
$estado = $_POST["estado"];



$conexion = mysqli_connect("localhost","root","","rym");

$consultaSelect = "SELECT * FROM `personajes` WHERE `id`='{$id}' AND `nombre`='{$nombre}' AND `especie`='{$especie}' AND `estado`='{$estado}'";
$consultaInsert = "INSERT INTO personajes(id,nombre,especie,estado) VALUES('{$id}','{$nombre}','{$especie}','{$estado}')";


$select = mysqli_query($conexion,$consultaSelect);
$datos = mysqli_fetch_all($select,MYSQLI_ASSOC);

if (!empty($datos)) {
    echo "El personaje ya se encuentra registrado";
}else{
    $insert = mysqli_query($conexion,$consultaInsert);
    echo "Personaje registrado con exito";
}
?>