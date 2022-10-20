<?php

class Cuenta {
    private $titular;
    private $cantidad=0;

    public function __construct(string $titular, float $cantidad=null){
        $this->titular=$titular;
        $this->cantidad=$cantidad;
    }

    public function setTitular($titular){
        $this->titular=$titular;
    }
    public function setCantidad($cantidad){
        $this->cantidad=$cantidad;
    }

    public function getTitular(){
        return $this->titular;
    }
    public function getCantidad(){
        return $this->cantidad;
    }

    public function mostrar(){
        $datosCuenta="
        <b>Titular: </b>{$this->titular}<br>
        <b>Cantidad: </b>{$this->cantidad}<br>
        ";
        return $datosCuenta;
    }

    public function ingresar($cantidad){
        if ($cantidad>0) {
            $this->cantidad =  ( $this->cantidad + $cantidad );
        }
    }

    public function retirar($cantidad){
        $this->cantidad =  ( $this->cantidad - $cantidad );
    }
}

?>