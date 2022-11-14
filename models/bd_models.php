<?php
    class bd_models{
        private $conexion;
        private $nombre;
        private $correo;
        private $mensaje;
        private $apellido;
        private $id;

        public function __construct($conexion,$nombre,$correo,$mensaje,$apellido,$id)
        {
            $this->conexion = $conexion;
            $this->nombre = $nombre;
            $this->correo = $correo;
            $this->mensaje = $mensaje;
            $this->apellido = $apellido;
            $this->id = $id;
        }

        public function insertar(){
            $tablaColeccion = $this->conexion->comentario;
            $resultado = $tablaColeccion->insertOne(["nombre"  => $this->nombre, 
                                                     "correo"  => $this->correo,
                                                     "mensaje" => $this->mensaje,
                                                     "apellido"=> $this->apellido]);
                                                    $resultado->getInsertedId();
        }

        public function eliminar(){
            $tablaColeccion = $this->conexion->comentario;
            $resultados = $tablaColeccion->deleteOne(["_id"=> new MongoDB\BSON\ObjectId($this->id)]);
                                                                        $resultados->getDeletedCount();
        }

        public function actualizar(){
            $tablaColeccion = $this->conexion->comentario;
            $resultado = $tablaColeccion->updateOne(["correo" => $this->correo],
                ['$set' => [
                            "mensaje"=>$this->mensaje
                            ]  
                ]);
                                                    $resultado->getModifiedCount();
        }

        public function mostrar(){
            $tablaColeccion = $this->conexion->comentario;
            $resultado = $tablaColeccion->find();
            return $resultado;
        }
    }

?>