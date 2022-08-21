<?php
    include_once 'Repartidor.php';
    include_once 'Comercial.php';

    $empleado = new Repartidor('Mariano','Rivero',26,1000);
    $empleado->setZona('A');
    echo($empleado->plus());

    $empleado2 = new Comercial('Gabriel','Jesus',50,1000);
    $empleado2->setComision(500);
    echo ( $empleado2->plus() );



?>