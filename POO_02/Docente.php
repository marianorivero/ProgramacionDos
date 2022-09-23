<?php
require_once ("Persona.php");
require_once("Edad.php");

class Docente extends Persona {
    use Edad;

    public function descuento(){
        define("EDAD", $this->calcularEdad($this->getFechaNacimiento()));
        define("LEGALIDAD",18);
        define("ESTIPULADA",25);
        define("CUMPLEANIOS", ($this->getFechaNacimiento())->format('d-m'));
        define("ACTUALFECHA",date("d-m"));


        if (EDAD < LEGALIDAD) {
            echo "Lo siento, debe ser mayor de edad para utilizar el servicio";

        }else {
            
            if (EDAD >= ESTIPULADA) {
                $arancelDocente = $this->getArancel();
                $this->setArancel($arancelDocente-($arancelDocente * 0.1));   
            }

            
            if (CUMPLEANIOS == ACTUALFECHA) { //si es su cumpleaños paga el doble
                $arancelDocente = $this->getArancel();
                $this->setArancel($arancelDocente*2);
            }
    
            echo($this->getInfo());
            echo("<b>Edad:</b> ".EDAD);
        }
    }

}

?>