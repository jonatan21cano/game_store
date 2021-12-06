<?php 

   //1. Incluir el modelo de la BD
    //   Incluir el modelo Empleado
    include("../models/BaseDatos.php");
    include("../models/productos.php");

    //2. Creo un objeto(variable) del modelo EMPLEADO
    $producto=new Producto(null,null,null,null,null);

     //4. Ejecutar el metodo buscar registro de la bd
     $baseDatos=new BaseDatos();
     $productos=$baseDatos->buscarRegistros($producto->buscar());

     //print_r($productos);


?>