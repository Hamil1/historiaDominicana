<?php 
require '../vendor/autoload.php';

class_alias('\RedBeanPHP\R','R');

class mainModel{
    function __construct(){
        R::setup('mysql:host=localhost;dbname=historiaDominicana', 'root','');
    }

    public function crearUsuario($nombre, $correo, $contrasena, $fecha_creacion = false){
        
        try{
            $usuario = R::dispense('usuarios');
            $usuario->nombre = $nombre;
            $usuario->correo = $correo;
            $usuario->contrasena = sha1($contrasena);
            $usuario->fecha_creacion = (!$fecha_creacion)?time():$fecha_creacion;
            R::store($usuario);
            $mensaje = array("message"=>"Cuenta creada.","option"=>"success");
            echo json_encode($mensaje);
        }catch(Exception $e){
            $mensaje = array("message"=>"Problemas en el servidor. Contacte al administrador.","option"=>"error");
            echo json_encode($mensaje);
        }
    }

    public function iniciarSesion($correo, $contrasena){//Este método es el que valida las credenciales y permite al usuario logearse.
        $usuario = R::getAll("SELECT * FROM usuarios WHERE correo = '".$correo."' AND contrasena = '".sha1($contrasena)."'");
        $registro = count($usuario);
        if(count($usuario) == 0){
            return false;
        }else if(count($usuario) >= 1){
            return true;
        }
    }

}

?>