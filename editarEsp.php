<?php

    include("BaseDatos.php");

    if(isset($_POST["botonEditar"])){

        $id=$_GET["id"];

       
        $placa=$_POST["placaEditar"];
        $marca=$_POST["marcaEditar"];
        $modelo=$_POST["modeloEditar"];
        $color=$_POST["colorEditar"];
        $nomConductor=$_POST["nomConductorEditar"];
        $ingreso=$_POST["ingresoEditar"];
        $salida=$_POST["salidaEditar"];
        $estado=$_POST["estadoEditar"];
        

        $transaccion= new BaseDatos();

        $consultaSQL="UPDATE espacios SET placa='$placa',marca='$marca',modelo='$modelo',color='$color',nomConductor='$nomConductor',ingreso='$ingreso',salida='$salida',estado='$estado' WHERE idespacio='$id'";
        

        $transaccion->modificarTabla($consultaSQL);

        header("location:listadoEsp.php");

    }







?>