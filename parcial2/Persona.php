<?php

class Persona {
    private $nombre ;
    private $edad;
    private $dni;

    public function __construct(string $nombre = null, int $edad = null, int $dni=null){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->dni = $dni;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setEdad($edad){
        $this->edad = $edad;
    }
    public function setDni($dni){
        $this->dni = $dni;
    }



    public function getNombre(){
        return $this->nombre;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getDni(){
        return $this->dni;
    }


    public function mostrar(){
        $datosPersona="
        <b>Nombre: </b>{$this->nombre}<br>
        <b>Edad: </b>{$this->edad}<br>
        <b>DNI: </b>{$this->dni}<br>
        "; 
        return $datosPersona;
    }

    public function esMayorDeEdad(){
        if ($this->edad >= 18) {
            $mayor=true;
        }else {
            $mayor=false;
        }
        return $mayor;
    }
}

?>