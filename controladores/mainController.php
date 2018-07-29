<?php 
    require "../modelos/mainModel.php";
    $instancia = new mainController();

    class mainController{

        function __construct(){
            if(isset($_POST['metodo']) && !empty($_POST['metodo'])){
                switch ($_POST['metodo']){
                    case "agregarArticulo": $this->agregarArticulo(); break;
                    case "iniciarSesion": $this->iniciarSesion(); break;
                }
            }
        }

        public function iniciarSesion(){
            $modelo = new mainModel();
            include_once "../vistas/login.php";
        }

        public function agregarArticulo(){
            
        }

    }
?>