
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
     style="background-image: url('../public/img/fondo2.jpg');
            height: 100vh"> 


    <?php include("navbar.php") ?>

<div class="container mt-3 col-md-4 text-white">
  <h2>Productos gamestore</h2>
  <form action="../controllers/productosController.php" method="POST"> 
    <div class="mb-3 mt-3">
      <label >Nombre:</label>
      <input type="text" class="form-control" name="nombre">
    </div>
    <div class="mb-3">
      <label for="pwd">Marca</label>
      <input type="text" class="form-control"  name="marca">
    </div>
    <div class="mb-3 mt-3">
      <label >Precio</label>
      <input type="number" class="form-control" name="precio">
    </div>
    <div class="mb-3 mt-3">
      <label >Nombre Foto</label>
      <input type="text" class="form-control" name="foto">
    </div>
    <div class="mb-3 mt-3">
      <label >Descripcion</label>
      <input type="text" class="form-control" name="descripcion">
    </div>
    <button type="submit" name="boton" class="btn btn-primary">Guardar</button>
  </form>
</div>






<script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>