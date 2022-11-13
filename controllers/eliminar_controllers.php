<?php 
    require_once("models/bd_models.php");
    require_once("utils/conexion.php");
    require_once("utils/modals.php");
    class eliminar_controllers {
        public static function index() {
            $msg = isset($_GET["msg"])?$_GET["msg"]:"";
            $title = "Eliminar | Laboratorio 6";
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/formulario/eliminar.php");
            require_once("views/template/footer.php");
        }

        public static function delete_bd(){
            if($_POST){
                $conexion = conexion::conexion_bd();
                $token= filter_var($_POST["token"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $id= filter_var($_POST["txt_eliminar"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $obj = new bd_models($conexion,"","","","",$id);
                $resultado = $obj->eliminar();
                header("location:index.php?c=".seg::codificar("eliminar")."&m=".seg::codificar("index")."&msg=".seg::codificar("EXITO - DATOS ELIMINADOS"));
            }
        }
    }
?>