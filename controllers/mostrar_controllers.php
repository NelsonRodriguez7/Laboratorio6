<?php 
    require_once("models/bd_models.php");
    require_once("utils/conexion.php");
    require_once("utils/modals.php");
    class mostrar_controllers {
        public static function index() {
            $msg = isset($_GET["msg"])?$_GET["msg"]:"";
            $title = "Mostrar | Laboratorio 6";
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/formulario/mostrar.php");
            require_once("views/template/footer.php");
        }

        public static function serch_bd(){
                $conexion = conexion::conexion_bd();
                $obj = new bd_models($conexion,"","","","","");
                $resultado = $obj->mostrar();  
                return $resultado;
        }
    }
?>