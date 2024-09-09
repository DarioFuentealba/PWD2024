<?php
class AbmAuto{
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los Modelos de las variables instancias del objeto

    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los Modelos de las variables instancias del objeto
     * @param ARRAY $param
     * @return Auto $obj
     */
    private function cargarObjeto($param){
        $obj = null;

        if( array_key_exists('Patente',$param) and 
        array_key_exists('Marca',$param) and
        array_key_exists('Modelo',$param) and
        array_key_exists('DniDuenio',$param)){
            $obj = new Auto();
            $obj->setear($param['Patente'], $param['Marca'], $param['Modelo'], $param['DniDuenio']);
        }
        return $obj;
    }
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los Modelos de las variables instancias del objeto que son claves
     * @param ARRAY $param
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
     * @param ARRAY $param
     * @return BOOLEAN $resp
     */
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['Patente']))
            $resp = true;
        return $resp;
    }
    
    /**
     * 
     * @param ARRAY $param
     * @return BOOLEAN $resp
     */
    public function alta($param){
        $resp = false;
        $param['Patente'] = null;
        $elObjAuto = $this->cargarObjeto($param);
//        verEstructura($elObjAuto);
        if ($elObjAuto != null and $elObjAuto->insertar()){
            $resp = true;
        }
        return $resp;
        
    }
    /**
     * permite eliminar un objeto 
     * @param ARRAY $param
     * @return BOOLEAN $resp
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
     * @param ARRAY $param
     * @return BOOLEAN $resp
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
     * @param ARRAY $param
     * @return ARRAY $arreglo
     */
    public function buscar($param){
        $objAuto = new Auto();
        $where = " true ";
        if ($param <> NULL){
            if (isset($param['Patente']))
                $where .= " and Patente = '".$param['Patente']."'";
            if (isset($param['Marca']))
                $where .= " and Marca = '".$param['Marca']."'";
            if (isset($param['Modelo']))
                $where .= " and Modelo = '".$param['Modelo']."'";  
            if (isset($param['DniDuenio']))
                $where .= " and DniDuenio = '".$param['DniDuenio']."'";     
        }
        $arreglo = $objAuto->listar($where);  //Auto::listar($where)
        return $arreglo;
    }
    
}
?>