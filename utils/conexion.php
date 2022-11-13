<?php 
    require_once "vendor/autoload.php";
    class conexion{
        public static function conexion_bd(){
           $cadenaConexion="mongodb+srv://ThisNelson:ThisNelson507@lab6.2ukmrdf.mongodb.net/?retryWrites=true&w=majority";
           $cliente = new MongoDB\Client($cadenaConexion);
           $conexion = $cliente->selectDatabase("lab6");
           return $conexion; 
        }
    }
    
?>