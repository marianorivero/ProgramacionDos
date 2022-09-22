<?php

function calcularEdad($fechaNacimiento){ 
  $diaNacimiento = substr($fechaNacimiento,-2);
  $mesNacimiento = substr($fechaNacimiento,5,-3);
  $anioNacimiento= substr($fechaNacimiento,0,4);

  $diaActual= date("d");
  $mesActual=date("m");
  $anioActual=date("Y");

  //si todavia no llego al dia de este mes
  if ( ($mesNacimiento == $mesActual) && ($diaNacimiento > $diaActual) ) {
    $anioActual=$anioActual-1; 
  }
  
  //si todavia no llega el mes
  if ($mesNacimiento > $mesActual) {
     $anioActual=$anioActual-1;
  }
  
  $edadActual= $anioActual - $anioNacimiento;

  return $edadActual;
}

?>