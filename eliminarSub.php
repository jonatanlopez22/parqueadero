<?php 


include("BaseDatos.php");

$id=$_GET["id"];

$transaccion=new BaseDatos();

$consultaSQL="DELETE FROM mensualidades WHERE idmensualidad='$id'";

$transaccion->modificarTabla($consultaSQL);

header("location:listadoSub.php");



?>