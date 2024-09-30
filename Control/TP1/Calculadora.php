<?php

class Calculadora{
    private $numero1;
    private $numero2;
    private $operacion;


    public function __construct($arregloDatos)
    {
        $this->numero1 = $arregloDatos["numero1"];
        $this->numero2 = $arregloDatos["numero2"];
        $this->operacion = $arregloDatos["operacion"];
    }

    public function getNumero1(){
        return $this->numero1;
    }
    public function setNumero1($num){
        $this->numero1 = $num;
    }
    public function getNumero2(){
        return $this->numero2;
    }
    public function setNumero2($num){
        $this->numero2 = $num;
    }
    public function getOperacion(){
        return $this->operacion;
    }
    public function setOperacion($operacion){
        $this->operacion = $operacion;
    }

    /**
     * retorna el resultado de la operacion
     * @return int
     */
    public function realizaOperacion(){
        $resultado = '';
        // if($this->getOperacion() == "suma"){
        //     $resultado = $this->getNumero1() + $this->getNumero2();
        // }elseif($this->getOperacion() == "resta"){
        //     $resultado = $this->getNumero1() - $this->getNumero2();
        // }elseif($this->getOperacion() == "multiplicacion"){
        //     $resultado = $this->getNumero1() * $this->getNumero2();
        // }elseif($this->getOperacion() == "division"){
        //     $resultado = $this->getNumero1() / $this->getNumero2();
        // }
        // $mensaje = "El resultado es: " . $resultado;
        // return $mensaje;
        
        $numero1 = $this->getNumero1();
        $numero2 = $this->getNumero2();
        if ($this->getOperacion() == "suma") {
            $resultado = $numero1 + $numero2;
        } elseif ($this->getOperacion() == "resta") {
            $resultado = $numero1 - $numero2;
        } elseif ($this->getOperacion() == "multiplicacion") {
            $resultado = $numero1 * $numero2;
        } elseif ($this->getOperacion() == "division") {
            // Verificar que el divisor no sea 0 para evitar la división por cero
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                $resultado = " No se puede dividir por cero.";
            }
        }
        $mensaje = "El resultado es: " . $resultado;
        return $mensaje;
    }
}