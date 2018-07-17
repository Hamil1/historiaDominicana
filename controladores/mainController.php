<?php 
    require "../modelos/mainModel.php";
    $instancia = new mainController();

    class mainController{

        function __constructor(){
            if(isset($_POST['metodo']) && !empty($_POST['metodo'])){
                switch ($_POST['metodo']){
                    case "agregarArticulo": $this->agregarArticulo();
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