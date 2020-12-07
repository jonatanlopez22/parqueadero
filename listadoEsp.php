<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicio</title>
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
          <li class="nav-item active">
                <a class="nav-link" href="listadoEsp.php">servicio</a>
            </li>
            <li class="nav-item  ">
              <a class="nav-link" href="listadoSub.php">mensualidades</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="formularioRegistro.php">Registro mensualidad<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item  ">
              <a class="nav-link" href="formularioServicio.php">Registro espacio</a>
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
    
    $consultaSQL="SELECT * FROM espacios WHERE 1";

    $espacios=$transaccion->consultarDatos($consultaSQL);

?>

<div class="container">

    <div class="row row-cols-1 row-cols-md-3">

        <?php foreach($espacios as $espacio): ?>

            <div class="col mb-4">

                <div class="card h-100 text-white bg-dark c">
                    <div class="card-body">
                        <h1 class="card-text"><?= $espacio["estado"] ?></h1>
                        <h5 class="card-title"><?= $espacio["placa"] ?></h5>
                        <h3 class="card-title"><?= $espacio["marca"] ?></h3>
                        <p class="card-text"><?= $espacio["modelo"] ?></p>
                        <p class="card-text"><?= $espacio["color"] ?></p>
                        <p class="card-text"><?= $espacio["nomConductor"] ?></p>
                        <p class="card-text">INGRESO= <?= $espacio["ingreso"] ?></p>
                        <p class="card-text">SALIDA= <?= $espacio["salida"] ?></p>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editar<?php echo($espacio["idespacio"])?>">
                            ocupar
                        </button>
                    </div>
                </div>

                <div class="modal fade" id="editar<?php echo($espacio["idespacio"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Servicio</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="editarEsp.php?id=<?php echo($espacio["idespacio"])?>" method="POST">






                   <div class="row mt-3">
                    <div class="col align-self-end">
                        <label class="font-weight-bold">Estado: </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="estadoEditar" value="DISPONIBLE">
                            <label class="form-check-label">DISPONIBLE</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="estadoEditar" value="OCUPADO">
                            <label class="form-check-label">OCUPADO</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="estadoEditar" value="RESERVADO">
                            <label class="form-check-label">RESERVADO</label>
                        </div>
                    </div>
                </div>                
                                    <div class="form-group">
                                        <label>placa:</label>
                                        <input type="text" class="form-control" name="placaEditar" value="<?php echo($espacio["placa"])?>">
                                    </div>
                                    <div class="form-group">
                                        <label>marca:</label>
                                        <textarea class="form-control" rows="3" name="marcaEditar"><?php echo($espacio["marca"])?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>modelo:</label>
                                        <textarea class="form-control" rows="3" name="modeloEditar"><?php echo($espacio["modelo"])?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>color:</label>
                                        <textarea class="form-control" rows="3" name="colorEditar"><?php echo($espacio["color"])?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>nomConductor:</label>
                                        <textarea class="form-control" rows="3" name="nomConductorEditar"><?php echo($espacio["nomConductor"])?></textarea>
                                    </div>
                                    <div class="form-group">

                                        <label>ingreso:</label>
                                        <textarea class="form-control" rows="3" name="ingresoEditar"><?php echo($espacio["ingreso"])?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>salida:</label>
                                        <textarea class="form-control" rows="3" name="salidaEditar"><?php echo($espacio["salida"])?></textarea>
                                    </div>
                                    <p><?php date_default_timezone_set('America/New_York');
                                    echo date('l jS \of F Y h:i:s A'); ?></p>
                                    
                                     <button type="submit" class="btn btn-info" name="botonEditar">ocupar</button>
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