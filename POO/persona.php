<?php
    class Persona{

        private $nombre;
        private $apellido;
        private $fechaNacimiento;

        public function __construct(string $nombre, string $apellido, string $fechaNacimiento){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->fechaNacimiento = $fechaNacimiento;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
    }


    $persona = New Persona('Mariano','Rivero','18-10-1997');

    $persona->setNombre('Mariano Alberto');
    echo($persona->getNombre());

?>