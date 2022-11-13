<?php 
    require_once("models/bd_models.php");
    require_once("utils/conexion.php");
    require_once("utils/modals.php");
    class insertar_controllers {
        public static function index() {
            $msg = isset($_GET["msg"])?$_GET["msg"]:"";
            $title = "Insertar | Laboratorio 6";
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/formulario/insertar.php");
            require_once("views/template/footer.php");
        }

        public static function insert_bd(){
            if($_POST){
                $conexion = conexion::conexion_bd();
                $token= filter_var($_POST["token"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $nombre= filter_var($_POST["txt_nombre"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $correo= filter_var($_POST["txt_correo"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $mensaje= filter_var($_POST["txt_mensaje"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $apellido= filter_var($_POST["txt_apellido"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $obj = new bd_models($conexion,$nombre,$correo,$mensaje,$apellido,"");
                $resultado = $obj->insertar();
                header("location:index.php?c=".seg::codificar("insertar")."&m=".seg::codificar("index")."&msg=".seg::codificar("EXITO - DATOS INGRESADOS"));
            }
        }
    }
?>