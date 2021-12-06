<?php 


    class Producto {


        //VARIABLES=DATOS=ATRIBUTOS
        public $nombre;
        public $marca;
        public $precio;
        public $foto;
        public $descripcion;
    


        //METODO ESPECIAL CONSTRUCTOR
        public function __construct($nombreFormulario,$marcaFormulario,$precioFormulario,$fotoFormulario,$descripcionFormulario){

            $this->nombre=$nombreFormulario;
            $this->marca=$marcaFormulario;
            $this->precio=$precioFormulario;
            $this->foto=$fotoFormulario;
            $this->descripcion=$descripcionFormulario;
            

        }

        //ACCIONES=FUNCIONES=METODOS

        public function registrar(){

            $consultaSQL="INSERT INTO productos(nombre,marca,precio,foto,descripcion) 
            VALUES ('$this->nombre','$this->marca',' $this->precio','$this->foto','$this->descripcion')";

            return $consultaSQL; 

        }

        public function buscar(){

            $consultaSQL="SELECT * FROM productos";
            return $consultaSQL;
        }

        public function eliminar($id){
            $consultaSQL="DELETE FROM productos WHERE id='$id'";
            return $consultaSQL;
        }

        public function editar($id){

            $consultaSQL="UPDATE productos 
                          SET 
                            nombre='$this->nombre',
                            marca='$this->marca',
                            precio='$this->precio',
                            foto='$this->foto',
                            descripcion='$this->descripcion'
                            
                          WHERE id='$id'";

            return $consultaSQL;

        }

       




    }





?>