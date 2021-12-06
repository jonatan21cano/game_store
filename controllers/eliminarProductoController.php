<?php 

    if(!isset($_SESSION)){
        session_start();
    }

    //1. Incluir el modelo de la BD
    //   Incluir el modelo Empleado
    include("../models/BaseDatos.php");
    include("../models/productos.php");

    //2. Recibir el id a eliminar
    $id=$_GET["id"];
    
    //3. Creo un objeto(variable) del modelo EMPLEADO
    $producto=new Producto(null,null,null,null,null,null);

    //4. Ejecutar el metodo insertar registro de la bd
    $baseDatos=new BaseDatos();
    $resultado=$baseDatos->insertarRegistro($producto->eliminar($id));

     //5. valido el resultado
       if($resultado){

           $_SESSION['mensaje']="exito elimianndo el jugador";

           header("Location:../views/index.php");
           

       }else{
           echo("upss... Tenemos problemas para registrar datos");
       }


?>