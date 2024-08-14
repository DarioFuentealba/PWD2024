<?php
class Persona {

    private $nombre;
    private $apellido;
    private $edad;
    private $direccion;

    public function __construct()
    {
        $this->nombre = "";
        $this->apellido = "";
        $this->edad = 0;
        $this->direccion = "";
    }// fin constructor

    public function getnombre(){
        return $this->nombre;
    }
    public function getapellido(){
        return $this->apellido;
    }
    public function getedad(){
        return $this->edad;
    }
    public function getdireccion(){
        return $this->direccion;
    }
    public function setnombre($var){
        $this->nombre = $var;
    }
    public function setapellido($var){
        $this->apellido = $var;
    }
    public function setedad($var){
        $this->edad = $var;
    }
    public function setdireccion($var){
        $this->direccion = $var;
    }
    

}


?>