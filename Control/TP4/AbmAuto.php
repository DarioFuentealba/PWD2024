<?php
class AbmAuto{
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los Modelos de las variables instancias del objeto

    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los Modelos de las variables instancias del objeto
     * @param array $param
     * @return Auto $obj
     */
    private function cargarObjeto($param){
        $obj = null;
        if( array_key_exists('Patente',$param) and 
        array_key_exists('Marca',$param) and
        array_key_exists('Modelo',$param) and
        array_key_exists('DniDuenio',$param)){
            $obj = new Auto();
            $objDuenio =  new Persona();
            $objDuenio->setNroDni( $param['DniDuenio']);
            $objDuenio->cargar();
            $obj->setear($param['Patente'], $param['Marca'], $param['Modelo'], $objDuenio);
        }
        return $obj;
    }
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los Modelos de las variables instancias del objeto que son claves
     * @param array $param
     * @return Auto $obj
     */
    private function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['Patente']) ){
            $obj = new Auto();
            $obj->setear($param['Patente'], null, null, null);
        }
        return $obj;
    }
    
    
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean $resp
     */
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['Patente']))
            $resp = true;
        return $resp;
    }
    
    /**
     * 
     * @param array $param
     * @return boolean $resp
     */
    public function alta($param){
        $resp = false;
        $elObjAuto = $this->cargarObjeto($param);
//        verEstructura($elObjAuto);
        if ($elObjAuto != null and $elObjAuto->insertar()){
            $resp = true;
        }
        return $resp;
        
    }
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean $resp
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjAuto = $this->cargarObjetoConClave($param);
            if ($elObjAuto!=null and $elObjAuto->eliminar()){
                $resp = true;
            }
        }
        
        return $resp;
    }
    
    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean $resp
     */
    public function modificacion($param){
        //echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjAuto = $this->cargarObjeto($param);
            if($elObjAuto != null and $elObjAuto->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    /**
     * permite buscar un objeto
     * @param array $param
     * @return array $arreglo
     */
    public function buscar($param){
        
        $where = " true ";
        if ($param <> NULL){
            if (isset($param['Patente']))
                $where .= " and Patente = '".$param['Patente']."'";
          /*  if (isset($param['Marca']))
                $where .= " and Marca = '".$param['Marca']."'";
            if (isset($param['Modelo']))
                $where .= " and Modelo = '".$param['Modelo']."'";  */
            if (isset($param['DniDuenio']))
                $where .= " and DniDuenio = '".$param['DniDuenio']."'";    
        }
        $arreglo = Auto::listar($where);  //Auto::listar($where)   $objAuto->
        return $arreglo;
    }
    
}
?>