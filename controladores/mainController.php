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
                    case "cerrarSesion": $this->cerrarSesion(); break;
                }
            }
        }

        private function iniciarSesion(){
            $modelo = new mainModel();
            $correo = (isset($_POST['correo']))?$_POST['correo']:false;
            $contrasena = (isset($_POST['contrasena']))?$_POST['contrasena']:false;
            
            if($correo == false && $contrasena == false){
                include_once "../vistas/login.php";
            }else{
                if($modelo->iniciarSesion($correo, $contrasena)){
                    $mensaje = array("message"=>"Sesión iniciada","option"=>"success","boton"=>'<span data-toggle="modal" class="agregarArticulo"><button id="agregarArticulo" data-toggle="modal" class="btn acceder cd-signin" data-toggle="tooltip" title="Agregar Articulo" data-placement="left"> <i class="fa fa-plus"></i></button></span><a id="cerrarSesion" class="cerrarSesion">Cerrar sesión</a>');
                    echo json_encode($mensaje);
                    $_SESSION['correo'] = $correo;
                    $_SESSION['login'] = true;
                }else{
                    $mensaje = array("message"=>"El correo o la contraseña introducida no concuerda con ninguna cuenta.","option"=>"error","boton"=>'<span data-toggle="modal"><button id="iniciarSesion" data-toggle="modal" class="accederLogin cd-signin" data-toggle="tooltip" title="Iniciar sesión" data-placement="left">Iniciar sesión</button></span>');
                    echo json_encode($mensaje);
                }
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

        private function cerrarSesion(){
            session_destroy();
            $mensaje = array("message"=>"La sesión ha sido cerrada.","option"=>"info","boton"=>'<span data-toggle="modal"><button id="iniciarSesion" data-toggle="modal" class="accederLogin cd-signin" data-toggle="tooltip" title="Iniciar sesión" data-placement="left">Iniciar sesión</button></span>');
            echo json_encode($mensaje);
        }

        public function sessionIniciada(){
            if($_SESSION['login']){
                return true;
            }else{
                return false;
            }
        }

    }
?>