<?php
    session_start();
    require_once("controllers/insertar_controllers.php");
    require_once("controllers/eliminar_controllers.php");
    require_once("controllers/actualizar_controllers.php");
    require_once("controllers/mostrar_controllers.php");
    require_once("utils/seg.php");
    require_once("utils/conexion.php");
    if (count($_GET)==0)
        call_user_func("insertar_controllers::index");
    else{
        $controlador = seg::decodificar($_GET["c"]);
        $metodo = seg::decodificar($_GET["m"]);
        call_user_func($controlador."_controllers::".$metodo);
        
    }
?>