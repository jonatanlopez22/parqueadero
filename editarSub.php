<?php

    include("BaseDatos.php");

    if(isset($_POST["botonEditar"])){

        $id=$_GET["id"];

        $placa=$_POST["placaEditar"];
        $marca=$_POST["marcaEditar"];
        $modelo=$_POST["modeloEditar"];
        $color=$_POST["colorEditar"];
        $nomConductor=$_POST["nomConductorEditar"];

        $transaccion= new BaseDatos();

        $consultaSQL="UPDATE mensualidades SET placa='$placa',marca='$marca',modelo='$modelo',color='$color',nomConductor='$nomConductor' WHERE idmensualidad='$id'";
        
        $transaccion->modificarTabla($consultaSQL);

        header("location:listadoSub.php");

    }







?>
