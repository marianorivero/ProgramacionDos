<?php
require_once ('Tienda.php');

$objProducto = new Tienda();
$objProducto->setProducto('Alfajor',250,100);
//echo $objProducto->getProducto();


//capturo el input
if (is_numeric($_POST["cant"])) {
    $cant= $_POST["cant"]; 
}



$objProducto->setCarrito('Alfajor', $cant);
$objProducto->setStock($cant);

//echo $objProducto->getProducto();
//echo $objProducto->getCarrito();

//Hacer una interfaz donde muestre el producto (descripcion y precio)
//y debajo el usuario debe elegir la cantidad.
//con un boton de submit tiene que aparecer la compra (getCarrito)
//Hay que validar la cantidad de stock y en el caso que no haya avisar
?>
