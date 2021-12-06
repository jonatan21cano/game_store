<?php

     if(!isset($_SESSION)){
        session_start();
    }

    //1. Incluir el modelo de la BD
    //   Incluir el modelo Empleado
    include("../models/BaseDatos.php");
    include("../models/productos.php");

    if(isset($_POST["botonEditar"])){

        //Recibo los datos a editar
        $nombre=$_POST["nombre"];
        $marca=$_POST["marca"];
        $precio=$_POST["precio"];
        $foto=$_POST["foto"];
        $descripcion=$_POST["descripcion"];
        


        //Recibo el id
        $id=$_GET["id"];
       

        // Creo un objeto(variable) del modelo EMPLEADO
        $productos=new Producto($nombre,$marca,$precio,$foto,$descripcion);

    
       //Ejecutar el metodo insertar registro de la bd
       $baseDatos=new BaseDatos();
       $resultado=$baseDatos->insertarRegistro($productos->editar($id));

       //5. valido el resultado
       if($resultado){

           $_SESSION['mensaje']="exito editando producto";

           header("Location:../views/index.php");
           

       }else{
           echo("upss... Tenemos problemas para registrar datos");
       }
        
        

    }else{
        echo("no deberias estar aquí");
    }




?>