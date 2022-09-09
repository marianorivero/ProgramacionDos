<?php

//un trait es un bloque donde declaro metodos para despues usarlos en una clase
trait Carrito {
    public $strProducto;
    public $intCantidad;


    public function setCarrito(string $producto, int $cantidad){
        $this->srtProducto = $producto;
        $this->intCantidad = $cantidad;
    }
}

?>