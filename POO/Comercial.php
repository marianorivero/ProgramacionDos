<?php
    require_once 'Empleado.php';

    class Comercial extends Empleado {
        public $comision;

        public function setComision($comision){
            $this->comision = $comision;
        }
        
        public function plus(){
            define('PLUS2',300);
            
            //Muestro los datos
            $this->info();
            echo("Comision: {$this->comision}<br>");
            
            //Si tiene mas de 30 y cobra comision mas de $200
            if ( $this->getEdad()>30  &&  ($this->comision>200) ) {

                //Muestro el salario con plus
                echo( "Salario(+plus): ".( $this->getSalario() + PLUS2));

            }
            echo("<br><br>" );
        }
    }
?>