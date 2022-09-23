<?php

class Persona{
    private $nombre;
    private $apellido;
    private $dni;
    private $fechaNacimiento;
    private $arancel;
    private $tipoPersona;

    public function __construct(string $nombre, string $apellido, $arancel, int $dni, $tipoPersona, $fechaNacimiento){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->arancel = $arancel;
        $this->fechaNacimiento= $fechaNacimiento;
        $this->tipoPersona= $tipoPersona;
    }

    
    public function getFechaNacimiento(){
        return $this->fechaNacimiento;
    }
    
    public function getArancel(){
        return $this->arancel;
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
    
    public function getTipoPersona(){
        return $this->tipoPersona;
    }
    
    public function setArancel($arancel){
        $this->arancel = $arancel;
    }

    public function setFechaNacimiento(){
        $this->fechaNacimiento = $fechaNacimiento;
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

    public function setTipoPersona($tipoPersona){
        $this->tipoPersona= $tipoPersona;
    }

    public function getInfo(){
        $mostrar="
            <b>Nombre completo:</b> {$this->nombre} {$this->apellido}<br>
            <b>DNI:</b> {$this->dni}<br>
            <b>Tipo:</b> {$this->tipoPersona} <br>
            <b>Fecha de nacimiento:</b> {$this->fechaNacimiento->format("Y-m-d")}<br>
            <b>Arancel Total:</b> $ {$this->arancel}<br>
        ";
        return $mostrar;
    }
}

?>