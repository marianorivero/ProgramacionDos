<?php
require_once ('Tienda.php');

$objProducto = new Tienda();
$objProducto->setProducto('Alfajor',250,100);
//                        nombre, precio, cantidad



//capturo el input
if (is_numeric($_POST["cant"])) {
    $cant= $_POST["cant"]; 

    // si la cantidad es menor/igual al stock y es mayor a 0
    if (  ($cant <= ($objProducto->intStock)) &&  $cant>0) {
        $objProducto->setCarrito('Alfajor', $cant);
        $objProducto->setStock($cant);
        
        echo $objProducto->getCarrito();

    } else {
        echo "La cantidad seleccionada excede el stock o es incorrecta";
    }
}
?>
