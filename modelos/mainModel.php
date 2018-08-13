<?php 
require '../vendor/autoload.php';

class_alias('\RedBeanPHP\R','R');

class mainModel{
    function __construct(){
        R::setup('mysql:host=localhost;dbname=historiaDominicana', 'root','');
    }

    public function crearUsuario($nombre, $correo, $contrasena, $fecha_creacion = false){
        $usuario = R::dispense('usuarios');
        $usuario->nombre = $nombre;
        $usuario->correo = $correo;
        $usuario->contrasena = sha1($contrasena);
        $usuario->fecha_creacion = (!$fecha_creacion)?time():$fecha_creacion;
        R::store($usuario);
    }

    public function iniciarSesion($correo, $contrasena){//Este método es el que valida las credenciales y permite al usuario logearse.
        
    }

}

?>