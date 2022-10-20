<?php
require_once("Cuenta.php");


class CuentaJoven extends Cuenta{

    private $bonificacion;//porcentaje

    public function __construct(float $bonificacion){
        $this->bonificacion = $bonificacion;
    }

    public function setBonificacion ($bonificacion){
        $this->bonificacion = $bonificacion;
    }

    public function getBonificacion(){
        return $this->bonificacion;
    }

    public function esTitularValido($edad){
        if ($edad>=18 && $edad<25) {
            return true;
        }else{
            return false;
        }
    }

    public function mostrar(){
        $cartel = "
        <b>Cuenta Joven</b><br>
        <b>Bonificacion: </b> {$this->bonificacion} <br>
        ";
        return $cartel;
    }
}
{}
?>