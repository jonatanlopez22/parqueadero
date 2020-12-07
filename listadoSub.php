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
<header class="col-12">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><ion-icon name="brush-outline"></ion-icon> PRK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
          <li class="nav-item ">
                <a class="nav-link" href="listadoEsp.php">servicio</a>
            </li>
            <li class="nav-item active ">
              <a class="nav-link" href="listadoSub.php">mensualidades</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="formularioRegistro.php">Registro mensualidad<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item  ">
              <a class="nav-link" href="calcular.php">calcular</a>
            </li>
          </ul>
        </div>
      </nav>   
</header> 
<main>

<?php
    
    include("BaseDatos.php");

    $transaccion=new BaseDatos();
    
    $consultaSQL="SELECT * FROM mensualidades WHERE 1";

    $mensualidades=$transaccion->consultarDatos($consultaSQL);

?>

<div class="container">





    <div class="row row-cols-1 row-cols-md-3">

        <?php foreach($mensualidades as $mensualidad): ?>

            <div class="col mb-4">

                <div class="card h-100 text-white bg-dark c">
                    <div class="card-body">
                        <h5 class="card-title"><?= $mensualidad["placa"] ?></h5>
                        <h3 class="card-title"><?= $mensualidad["marca"] ?></h3>
                        <p class="card-text"><?= $mensualidad["modelo"] ?></p>
                        <p class="card-text"><?= $mensualidad["color"] ?></p>
                        <p class="card-text"><?= $mensualidad["nomConductor"] ?></p>
                        <a href="eliminarSub.php?id=<?= ($mensualidad["idmensualidad"])?>" class="btn btn-danger">Eliminar</a>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($mensualidad["idmensualidad"])?>">
                            Editar
                        </button>
                    </div>
                </div>

                <div class="modal fade" id="editar<?php echo($mensualidad["idmensualidad"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edición</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="editarSub.php?id=<?php echo($mensualidad["idmensualidad"])?>" method="POST">
                                    <div class="form-group">
                                        <label>placa:</label>
                                        <input type="text" class="form-control" name="placaEditar" value="<?php echo($mensualidad["placa"])?>">
                                    </div>
                                    <div class="form-group">
                                        <label>marca:</label>
                                        <textarea class="form-control" rows="3" name="marcaEditar"><?php echo($mensualidad["marca"])?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>modelo:</label>
                                        <textarea class="form-control" rows="3" name="modeloEditar"><?php echo($mensualidad["modelo"])?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>color:</label>
                                        <textarea class="form-control" rows="3" name="colorEditar"><?php echo($mensualidad["color"])?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>nomConductor:</label>
                                        <textarea class="form-control" rows="3" name="nomConductorEditar"><?php echo($mensualidad["nomConductor"])?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-info" name="botonEditar">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        <?php endforeach ?>

    </div>

</div>

</main>
   
  <footer>
    <hr>
    <div class="row">
        <div class="col 12 col-md-4 ft">
            <p class="f">Jonatan Daniel Lopez Isaza</p>
            <p class="f">jonatanlopez696@gmail.com</p>
            <p class="f">Medellin,Colombia</p>
            <p class="f">2020</p>
        </div>
            <div class="col 12 col-md-8 p" >

    <a href="https://www.facebook.com/profile.php?id=100051168210801" target="_blank" class="btn btn-info p-3 mb-2 bg-primary text-white border-white"><ion-icon class="logo" name="logo-facebook"></ion-icon></a>
    <a href="https://co.pinterest.com/jonatanlopez696/" target="_blank" class="btn btn-info p-3 mb-2 bg-danger text-white border-white"><ion-icon  class="logo" name="logo-pinterest"></ion-icon></a>
    <a href="https://github.com/jonatanlopez22/proyectoHtml" target="_blank" class="btn btn-info p-3 mb-2 bg-dark text-white border-white"><ion-icon class="logo" name="logo-github"></ion-icon></a>
                          
            </div>
</div>

</footer>
<script  src = "https://unpkg.com/ionicons@5.1.2/dist/ionicons.js" > </script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>