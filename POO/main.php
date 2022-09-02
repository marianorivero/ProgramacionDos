<?php
    include_once 'Repartidor.php';
    include_once 'Comercial.php';

    
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"]; 
    $select=$_POST["puesto"];
    $x= $_POST["x"];
    
    if (is_numeric($_POST["salario"])) {
        $salario= $_POST["salario"]; 
    }else{
        $salario=0;
    }

    if (is_numeric($_POST["edad"])) {
        $edad= $_POST["edad"]; 
    }else{
        $edad=0;
    }

    if (condition) {
        # code...
    }

    /* Flata filtrar para quien se hace input, se tiene que crear un empleado o un comercial*/
    
    $empleado = new Repartidor($nombre,$apellido,$edad,$salario);
    $empleado->setZona($x);
    echo($empleado->plus());

    /*$empleado2 = new Comercial('Gabriel','Jesus',50,1000);
    $empleado2->setComision(500);
    echo ( $empleado2->plus() );
    {}*/
?>