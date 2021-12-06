<?php 

    if(!isset($_SESSION)){
        session_start();
    }

    
    include("../models/BaseDatos.php");
    include("../models/productos.php");

    

    if(isset($_POST["boton"])){

        $nombre=$_POST["nombre"];
        $marca=$_POST["marca"];
        $precio=$_POST["precio"];
        $foto=$_POST["foto"];
        $descripcion=$_POST["descripcion"];
        

        $productos=new Producto($nombre,$marca,$precio,$foto,$descripcion);

    
       $baseDatos=new BaseDatos();
       $resultado=$baseDatos->insertarRegistro($productos->registrar());

       if($resultado){

           $_SESSION['mensaje']="exito en el registro";

           header("Location:../views/index.php");
           

       }else{
           echo("upss... Tenemos problemas para registrar datos");
       }
        
        

    }else{
        echo("no deberias estar aquí");
    }

   


?>