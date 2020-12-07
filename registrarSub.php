<?php

    include("BaseDatos.php");

    if(isset($_POST["botonEnvio"])){    
       
        $placa=$_POST["placa"];
        $marca=$_POST["marca"];
        $modelo=$_POST["modelo"];
        $color=$_POST["color"];
        $nomConductor=$_POST["nomConductor"];

        $transaccion=new BaseDatos();

        $consultaSQL="INSERT INTO mensualidades(placa,marca,modelo,color,nomConductor) VALUES ('$placa','$marca','$modelo','$color','$nomConductor')";
    
        $transaccion->modificarTabla($consultaSQL);
    
        header("location:listadoSub.php");

    }


?>