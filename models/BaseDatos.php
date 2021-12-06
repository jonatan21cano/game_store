<?php 

    class BaseDatos {

        
        public $usuario="root";
        public $passwordBD="";
        public $servidorBD="mysql:host=localhost;";
        public $nombreBD="dbname=gamestore";
        

        
        public function __construct(){}

        
        public function conectarConBD(){

            
            try{

                $datosGeneralesBD=$this->servidorBD.$this->nombreBD;
                $conexion= new PDO($datosGeneralesBD,$this->usuario,$this->passwordBD);
                
                return $conexion;

            }catch(PDOException $error){

                die("Tenemos un problema ".$error->getMessage());

            }

        }

        public function insertarRegistro($consultaSQL){

            try{
                //1. construir un puente con la bd
                $conexion=$this->conectarConBD();

                
                $operacion=$conexion->prepare($consultaSQL);

                
                $resultado=$operacion->execute();

                return $resultado;

            }catch(PDOException $error){

                 die("Tenemos un problema ".$error->getMessage());

            }

        }

        public function buscarRegistros($consultaSQL){

             try{
                //1. construir un puente con la bd
                $conexion=$this->conectarConBD();

                //2. preparar la bd para que reciba mi consulta
                $operacion=$conexion->prepare($consultaSQL);

                //3.Establecer el formato de los daos consultados
                $operacion->setFetchMode(PDO::FETCH_ASSOC);

                //4. Ejecutar la operacion
                $operacion->execute();

                return $operacion->fetchAll();

            }catch(PDOException $error){

                 die("Tenemos un problema ".$error->getMessage());

            }

        }
        public function ejecutar($query){
            try{
                //1. construir un puente con la bd
                $conexion=$this->conectarConBD();

                //2. preparar la bd para que reciba mi consulta
                $operacion=$conexion->prepare($query);

                //3.Establecer el formato de los daos consultados
                $operacion->setFetchMode(PDO::FETCH_ASSOC);

                //4. Ejecutar la operacion
                $operacion->execute();

                return $operacion->fetchAll();

            }catch(PDOException $error){

                 die("Tenemos un problema ".$error->getMessage());

            }
        }


        
    }





?>