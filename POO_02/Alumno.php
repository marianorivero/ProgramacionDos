<?php
require_once ("Persona.php");
require_once("Edad.php");

class Alumno extends Persona {
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

            if (CUMPLEANIOS == ACTUALFECHA) {
                $this->setArancel(0);//su es cumpleaños no paga
    
            }elseif (EDAD <= ESTIPULADA) {
                $arancelAlumno = $this->getArancel();
                $this->setArancel($arancelAlumno-($arancelAlumno*0.2));//descuento 20%
            }
    
            echo($this->getInfo());
            echo("<b>Edad:</b> ".EDAD);
        }
    }

}
?>