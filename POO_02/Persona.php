<?php

class Persona{
    private $nombre;
    private $apellido;
    private $dni;
    private $edad;
    private $arancel;

    public function __construct(string $nombre, string $apellido, int $edad, int $dni){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->dni = $dni;
    }

    public function getArancel(){
        return $this->arancel;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function getDni(){
        return $this->dni;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }
    
    public function setArancel(){
        $this->arancel = $arancel;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function setDni($dni){
        $this->salario = $dni;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }



}

?>