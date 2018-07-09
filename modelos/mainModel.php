<?php 
require '../vendor/autoload.php';

class_alias('\RedBeanPHP\R','R');

R::setup('mysql:host=localhost;dbname=historiaDominicana', 'root','');

$usuario = R::dispense('usuarios');
$usuario->nombre = 'Hamil';
$usuario->apellido = 'Diaz';
$usuario->correo = 'hamil151@hotmail.com';
$usuario->contrasena = sha1('hamil12345');
$usuario->fecha_creacion = time();
R::store($usuario);
echo time();

?>