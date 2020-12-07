<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <li class="nav-item  ">
              <a class="nav-link" href="listadoSub.php">mensualidades</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="formularioRegistro.php">Registro mensualidad<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item  ">
              <a class="nav-link" href="formularioServicio.php">Registro espacio</a>
            </li>
            <li class="nav-item active ">
              <a class="nav-link" href="calcular.php">calcular</a>
            </li>
          </ul>
        </div>
      </nav>   
</header> 
   <main>

   <div class="container">
       <div class="row justify-content-center">
           <div class="col-6">

           <form action="calcular.php" method="POST">
                <div class="row mt-5">
                <h5>hora ingreso</h5>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="hora1" name="hora1">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="minuto1" name="minuto1">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="segundo1" name="segundo1">
                    </div>
                    
                </div>
                <div class="row mt-5">
                <h5>hora salida</h5>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="hora2" name="hora2">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="minuto2" name="minuto2">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="segundo2" name="segundo2">
                    </div>
                    
                </div>


                <button type="submit" class="btn btn-primary mt-4 bg-success" name="botonEnviar">calcular</button>
            </form>


            <?php if(isset($_POST["botonEnviar"])): ?> 

                <?php

                   
                    $hora1=$_POST["hora1"];
                    $minuto1=$_POST["minuto1"];
                    $segundo1=$_POST["segundo1"];

                    $hora2=$_POST["hora2"];
                    $minuto2=$_POST["minuto2"];
                    $segundo2=$_POST["segundo2"];
                   
                    
                    $hora=$hora2-$hora1;
                    $minuto=$minuto2-$minuto1;
                    $segundo=$segundo2-$segundo1;


                    $horaa=$hora;
                    $minutoa=$minuto;
                    $segundoa=$segundo;

                  if($minuto<0)
                  {
                    $horaa=$hora-1;
                    $minutoa=$minuto+60;

                  }elseif($segundo<0)
                  {
                    $minutoa=$minuto-1;
                    $segundoa=$segundo+60;

                  }elseif($minuto<0 && $segundo<0)
                  {
                    $horaa=$hora-1;
                    $minutoa=$minuto+59;
                    $segundoa=$segundo+60;
                  }else
                  {
                    $horaa=$hora;
                    $minutoa=$minuto;
                    $segundoa=$segundo;
                  }


                    $minutoh=$horaa*60;
                    $minutot=$minutoa+$minutoh;
                    $valor=$minutot*1000;
                    $valort=$valor;
                    $valorf=$valort;

                    if($segundoa>0)
                    {
                      $valorf=$valort+1000;
                    }else{
                      $valorf=$valort+0;
                    }

                 

                ?>

                  
                   <h5><?php echo("el valor del servicio es ".$valorf); ?></h5>
                   <br>
                   <br>
                   <h5><?php echo("Tiempo de uso HORAS: ".$horaa." Minutos: ".$minutoa." Segundos: ".$segundoa); ?></h5>
              
            <?php endif ?>


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
