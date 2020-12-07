<?php
    
  
    
    include("BaseDatos.php");

    $placa=$_POST["placa"];

    $transaccion=new BaseDatos();
    
    $consultaSQL="SELECT * FROM espacios WHERE placa='$placa'";

    $espacios=$transaccion->consultarDatos($consultaSQL);



?>