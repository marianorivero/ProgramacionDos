<?php
    include_once 'Repartidor.php';
    include_once 'Comercial.php';

    // Capturo y verifico los datos enviados del index
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
    
    //con el dato "x" filtro sobre que nuevo tipo de empleado voy a crear, "x" representa la zona o la comision, si es numerico quiere decir que es una comision por lo que se creara un comercial, de lo contrario sera un repartidor
    if (is_numeric($x)) {
        $empleado = new Comercial($nombre,$apellido,$edad,$salario);
        $empleado->setComision($x);
        echo ( $empleado->plus() );
        
    }else{
        $empleado = new Repartidor($nombre,$apellido,$edad,$salario);

        // Convierto $x en mayuscula para setear la zona
        $x = mb_strtoupper($x);
        $empleado->setZona($x);
        echo($empleado->plus());
    }

?>