<?php
    require_once 'Empleado.php';

    class Repartidor extends Empleado {
        public $zona;
        
        public function setZona($zona){
            $this->zona = $zona;
        }
          

        
        public function plus(){
            define('PLUS',300);

            //Muestro los datos
            $this->info();
            echo("Zona: {$this->zona}<br>");
            
            //Si la edad es menor a 25 y la zona es 'A':
            if ( $this->getEdad()<25 && $this->zona=='A' ) {

                //Muestro el salario con plus
                echo( "Salario(+plus): ".( $this->getSalario() + PLUS));

            }
            echo("<br><br>" );
        }
    }
?>