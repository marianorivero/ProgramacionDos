<?php

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$especie = $_POST["especie"];
$estado = $_POST["estado"];


$conexion = mysqli_connect("localhost","root","","rym");

$consulta = "INSERT INTO `personajes`(`id`,`nombre`, `especie`, `estado`) VALUES ('{$id}','{$nombre}','{$especie}','{$estado}'')";

$res = mysqli_query($conexion,$consulta);

// `id`,
// '{$id}',
echo "Conexion exitosa";

?>