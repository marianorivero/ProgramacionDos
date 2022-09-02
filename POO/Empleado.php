<?php
    class Empleado{

        private $nombre;
        private $apellido;
        private $edad;
        private $salario;

        public function __construct(string $nombre, string $apellido, int $edad, int $salario){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->edad = $edad;
            $this->salario = $salario;
        }

        public function info(){
            echo("Nombre: {$this->nombre} <br>");
            echo("Apellido: {$this->apellido}<br>");
            echo("Edad: {$this->edad} <br>");
            echo("Salario: {$this->salario}<br>");
        }

        public function getEdad(){
            return $this->edad;
        }

        public function getSalario(){
            return $this->salario;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }
        

        public function setEdad($edad){
            $this->edad = $edad;
        }

        public function setSalario($edad){
            $this->salario = $salario;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }




    }
?>