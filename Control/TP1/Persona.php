<?php
class Persona {

    private $nombre;
    private $apellido;
    private $edad;
    private $direccion;
    private $estudio;
    private $sexo;
    private $colDeportes;

    public function __construct()
    {
        $this->nombre = "";
        $this->apellido = "";
        $this->edad = 0;
        $this->direccion = "";
        $this->estudio = "";
        $this->sexo = "";
    }// fin constructor

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getEstudio(){
        return $this->estudio;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function getDeportes(){
        return $this->colDeportes;
    }
    public function setNombre($var){
        $this->nombre = $var;
    }
    public function setApellido($var){
        $this->apellido = $var;
    }
    public function setEdad($var){
        $this->edad = $var;
    }
    public function setDireccion($var){
        $this->direccion = $var;
    }
    public function setEstudio($var){
        $this->estudio = $var;
    }
    public function setSexo($var){
        $this->sexo = $var;
    }
    public function setDeportes($array){
        $this->colDeportes = $array;
    }

/******************************************************************* */
/******************************************************************* */

    /**
     * Summary of mayorEdad
     * @return bool
     */
    public function mayorEdad(){
        $retorno = false;
        if ($this->edad >= 18){$retorno = true;}
        return $retorno;
    }
    /**
     * Summary of mostrarEstudios
     * @return string
     */
    public function mostrarEstudios(){
        $retorno = "";
        if ($this->getEstudio() == 1){
            $retorno = "No tengo Estudios";
        }else if ($this->getEstudio() == 2){
            $retorno = "Tengo Estudios Secundarios ";
        }else if ($this->getEstudio() == 3){
            $retorno = "Tengo Estudios Terciarios ";
        }
        return $retorno;
    }
    /**
     * Summary of mostrarSexo
     * @return string
     */
    public function mostrarSexo(){
        $retorno = "";
        if ($this->getSexo() == "M" || $this->getSexo() == "m"){
            $retorno = "Masculino";
        }else{
            $retorno = "Femenino";
        }
        return $retorno;
    }


}


?>