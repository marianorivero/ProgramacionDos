<?php

trait Edad{

  function calcularEdad($fechaNacimiento){
    $fechaActual = new DateTime(date('y-m-d'));
    $edadActual = $fechaNacimiento->diff($fechaActual);
    
    return $edadActual->format("%y");
  }

}

?>
