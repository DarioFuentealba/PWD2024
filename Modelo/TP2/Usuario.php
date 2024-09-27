<?php
class Usuario{
private $usuarios;

public function __construct(){
        // Arreglo de usuarios y contraseñas
        $this->usuarios= ["usuario" => "esteban","clave" => "1111"];
        $usuarios[1] = ["usuario" => "martin", "clave" => "2222"];
        $usuarios[2] = ["usuario" => "juan", "clave" => "3333"];
        $usuarios[3] = ["usuario" => "gaston", "clave" => "4444"];
}
public function getUsuarios(){
return $this->usuarios;
}

// Método para validar usuario y contraseña
public function validarUsuario($usuario, $clave){
if (isset($this->usuarios[$usuario])) {
        return $this->usuarios[$usuario] === $clave;
}
return false;
}
}

?>        