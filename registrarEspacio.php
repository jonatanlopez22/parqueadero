<?php

    include("BaseDatos.php");

    if(isset($_POST["botonEnvio"])){
    
   
        $placa=$_POST["placa"];
        $marca=$_POST["marca"];
        $modelo=$_POST["modelo"];
        $color=$_POST["color"];
        $nomConductor=$_POST["nomConductor"];
        $ingreso=$_POST["ingreso"];
        $salida=$_POST["salida"];
    
    
        $transaccion=new BaseDatos();
    
        $consultaSQL="INSERT INTO espacios(placa,marca,modelo,color,nomConductor,ingreso,salida) VALUES ('$placa','$marca','$modelo','$color','$nomConductor','$ingreso','$salida')";
        
        $transaccion->modificarTabla($consultaSQL);
    
        header("location:listadoEsp.php");
    
    
    }

?>


