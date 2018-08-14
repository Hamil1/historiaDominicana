<?php 
    require "../modelos/mainModel.php";
    $instancia = new mainController();

    class mainController{

        function __construct(){
            if(isset($_POST['metodo']) && !empty($_POST['metodo'])){
                switch ($_POST['metodo']){
                    case "agregarArticulo": $this->agregarArticulo(); break;
                    case "iniciarSesion": $this->iniciarSesion(); break;
                    case "crearUsuario": $this->crearUsuario(); break;
                }
            }
        }

        public function iniciarSesion(){
            $modelo = new mainModel();
            $correo = (isset($_POST['correo']))?$_POST['correo']:false;
            $contrasena = (isset($_POST['contrasena']))?$_POST['contrasena']:false;
            
            if($correo == false && $contrasena == false){
                include_once "../vistas/login.php";
            }else{
                $modelo->iniciarSesion($correo, $contrasena);
            }
        }

        public function agregarArticulo(){
            
        }

        public function crearUsuario(){
            $modelo = new mainModel();
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            $fechaCreacion = time();
            $modelo->crearUsuario($nombre, $correo, $contrasena, $fechaCreacion);
        }

    }
?>