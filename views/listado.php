<?php 
    include("../controllers/listadoController.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-image" 
     style="background-image: url('../public/img/fondo.jpg');
            height: 100vh">
    <?php include("navbar.php") ?>


    <main>
        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                
                <?php foreach($productos as $producto):?>
                    <div class="col">
                        <div class="card h-100 p-3">
                            <img src="../public/img/<?php echo($producto["foto"]) ?>" class="card-img-top h-100" alt="foto">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo($producto["nombre"])?></h5>
                                <p class="card-text text-center">Marca: <?php echo($producto["marca"])?></p>
                                <p class="card-text text-center ">Precio: <?php echo($producto["precio"])?></p>
                                <p class="card-text text-center "><?php echo($producto["descripcion"])?></p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmacion<?= $producto["id"] ?>" ><i class="fas fa-trash-alt"></i></a>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar<?= $producto["id"] ?>"><i class="fas fa-edit"></i></a>
                            </div>
                        </div>

                        <!-- Modal eliminar -->
                        <section>
                            <div class="modal fade" id="confirmacion<?= $producto["id"] ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary text-white">
                                            <h5 class="modal-title">La tiendita del horror</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>¿Estás seguro de eliminar este jugador?</p>
                                            <p><?= $producto["id"] ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <a href="../controllers/eliminarProductoController.php?id=<?= $producto["id"]?>" class="btn btn-danger">Aceptar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Modal editar -->
                        <section>
                            <div class="modal fade" id="editar<?= $producto["id"] ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary text-white">
                                            <h5 class="modal-title">gamestore</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="<?= $producto["foto"] ?>" alt="foto" class="img-fluid w-100">
                                                </div>
                                                <div class="col-9">
                                                    <form action="../controllers/editarProductoControllers.php?id=<?=$producto["id"]?>" method="POST">
                                                        <div class="mb-3">
                                                            <label  class="form-label">nombre</label>
                                                            <input name="nombre" type="text" class="form-control" value="<?= $producto["nombre"] ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label  class="form-label">Marca</label>
                                                            <input name="marca" type="text" class="form-control" value="<?= $producto["marca"] ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label  class="form-label">Precio</label>
                                                            <input name="precio" type="text" class="form-control" value="<?= $producto["precio"] ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label  class="form-label">foto</label>
                                                            <input name="foto" type="text" class="form-control" value="<?= $producto["foto"] ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label  class="form-label">descripcion</label>
                                                            <input name="descripcion" type="text" class="form-control" value="<?= $producto["descripcion"] ?>">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary" name="botonEditar">Editar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>
                        

                    </div>
                <?php endforeach ?>

            </div>
        </div>  
    </main>

    


    <script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
    <script type="module" src="../public/js/lanzarmodal.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>