<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css" >
</head>
<body>

<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <img src="icono/magdalena.png" width="30" height="30" class="d-inline-block aling-top" alt="logo1" loading="lazy">
            <a class="navbar-brand" href="#">Delicias</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Registro <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ListadoProductos.php">Listado</a>
                    </li>
                </ul>
            </div>
        </nav>
   </header>
<main>
<div class="container">
<form class="mt-5" method="POST" action="registrarproductos.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Nombreproducto1">Nombre Producto</label>
      <input type="text" class="form-control" id="Nombreproducto1" name="nombrep"> 
    </div>
    <div class="form-group col-md-6">
      <label for="Marcaproducto1">Marca Producto</label>
      <input type="text" class="form-control" id="Marcaproducto1" name="marcap">
    </div>
  </div>
  <div class="form-group col-md-6 container">
    <label for="Precio1">Precio</label>
    <input type="number" class="form-control" id="Precio1" name="preciop">
  </div>
  <div class="form-group">
    <label for="Descripcionp1">Descripcion del producto</label>
    <input type="text" class="form-control" id="Descripcionp1" placeholder="Describa el producto" name="descripcionp">
  </div>

  <div class="form-group">
    <label for="Foto1">Imagen</label>
    <input type="text" class="form-control" id="Foto1" placeholder="URL de la imagen" name="foto">
  </div>


  <div class="form-group">
    <div class="form-check mb-2">
      <input class="form-check-input" type="checkbox" id="Guardar1">
      <label class="form-check-label" for="gridCheck">
        Guardar
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary mb-2" name="Boton">Agregar</button>
</form>

</div>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>