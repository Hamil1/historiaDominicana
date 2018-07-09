<?php 
require 'vendor/autoload.php';

class_alias('\RedBeanPHP\R','R');

class mainModel{
    function __construct(){
        R::setup('mysql:host=localhost;dbname=historiaDominicana', 'root','');
    }

    public function crearUsuario($nombre, $apellido, $correo, $contrasena, $fecha_creacion = false){
        $usuario = R::dispense('usuarios');
        $usuario->nombre = $nombre;
        $usuario->apellido = $apellido;
        $usuario->correo = $correo;
        $usuario->contrasena = sha1($contrasena);
        $usuario->fecha_creacion = (!$fecha_creacion)?time():$fecha_creacion;
        R::store($usuario);
    }

}

?>