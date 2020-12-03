<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <img src="icono/magdalena.png" width="30" height="30" class="d-inline-block aling-top" alt="logo1" loading="lazy">
            <a class="navbar-brand" href="#">Delicias</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Registro <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ListadoProductos.php">Listado</a>
                    </li>
                </ul>
            </div>
        </nav>
   </header>
    
    <?php
    include( "BaseDatos.php" );

    $operacionBD= new BaseDatos();
    $consultaSQL="SELECT * FROM `productos` WHERE 1";

    $productos=$operacionBD->consultarDatos($consultaSQL);
    


    ?>

<div class="container">
    
<div class="row row-cols-1 row-cols-md-3">

<?php foreach($productos as $producto):?>

        <div class="col mb-4">
            
            <div class="card h-100">
                <img src="<?php echo($producto["foto"]) ?>" class="card-img-top" alt="foto">
                <div class="card-body">
                    <h5 class="card-title"><?php echo($producto["nombre"])?></h5>
                    <p class="card-text"><?php echo($producto["descripcion"])?></p>
                    <a href="eliminarProductos.php?id=<?php echo($producto["id"])?>" class="btn btn-danger">Eliminar</a>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar">
                       Editar
                    </button>
                </div>
            </div>

            <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edición</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">

                            <div class="form-group">
                                <label>Nombre:</label>
                                <input type="text" class="form-control">  
                            </div>

                            <div class="form-group">
                                <label>Descripcion:</label>
                                <textarea class="form-control" rows="3"></textarea>  
                            </div>

                            <button type="submit" class="btn btn-primary">Enviar</button>
                        
                        </form>
                    </div>
                    
                    </div>
                </div>
            </div>

        
        </div>

<?php endforeach?>

</div>




</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>   
</body>
</html>