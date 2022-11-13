<?php 
    require_once("models/bd_models.php");
    require_once("utils/conexion.php");
    require_once("utils/modals.php");
    class actualizar_controllers {
        public static function index() {
            $msg = isset($_GET["msg"])?$_GET["msg"]:"";
            $title = "Actualizar | Laboratorio 6";
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/formulario/actualizar.php");
            require_once("views/template/footer.php");
        }

        public static function update_bd(){
            if($_POST){
                $conexion = conexion::conexion_bd();
                $token= filter_var($_POST["token"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $correo= filter_var($_POST["txt_actualizar"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $mensaje= filter_var($_POST["txt_actualizar_2"], FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
                $obj = new bd_models($conexion,"",$correo,$mensaje,"","");
                $resultado = $obj->actualizar();  
                header("location:index.php?c=".seg::codificar("actualizar")."&m=".seg::codificar("index")."&msg=".seg::codificar("EXITO - MENSAJE ACTUALIZADO")); 
            }
        }
    }
?>