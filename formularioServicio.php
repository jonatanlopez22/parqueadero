<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
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
            <li class="nav-item  ctive">
              <a class="nav-link" href="formularioServicio.php">Registro espacio</a>
            </li>          
          </ul>
        </div>
      </nav>   
</header> 
    <main>
    <div class="container">
       <div class="row justify-content-center">
           <div class="col-6">
           <form action="registrarEspacio.php" method="POST">
                <h2 class="p1   ">Registro espacio</h2>
                
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Placa" name="placa">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Marca" name="marca">
                    </div>
                </div>
                
                <div class="row mt-3">
                    
                <div class="col">
                        <input type="text" class="form-control" placeholder="Modelo" name="modelo">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Color" name="color">
                    </div>
                </div>
                <div class="row mt-3">
                    
                <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre_Conductor" name="nomConductor">
                    </div>
                </div>
                <div class="row mt-3">
                    
                    <div class="col">
                            <input type="text" class="form-control" placeholder="Ingreso" name="ingreso">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Salida" name="salida">
                        </div>
                    </div>
                <div class="ft">
                <button type="submit" class="btn btn-dark btn-block" name="botonEnvio">Registrar</button>
                </div>
                
            </form>
        


           </div>
       </div>
   </div>
    </main>
    <footer>
    <hr>
    <div class="row">
    <div class="col 12 col-md-6 ft">
        <p class="f">Jonatan Daniel Lopez Isaza</p>
        <p class="f">jonatanlopez696@gmail.com</p>
        <p class="f">Medellin,Colombia</p>
        <p class="f">2020</p>
    </div>
   <div class="col 12 col-md-6 p" >


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

