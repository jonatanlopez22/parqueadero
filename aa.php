<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <main>

    <?php
    
    include("BaseDatos.php");

    $transaccion=new BaseDatos();
    
    $consultaSQL="SELECT * FROM espacios WHERE 1";

    $espacios=$transaccion->consultarDatos($consultaSQL);

    ?>

<div>

    
    <table class="table table-bordered table-dark ">
        <thead>
            <tr>
                <th  scope="col">estado</th>
                <th  scope="col">placa</th>
                <th  scope="col">marca</th>
                <th scope="col">modelo</th>
                <th scope="col">color</th>
                <th scope="col">nomConductor</th>
                <th scope="col">ingreso</th>
                <th scope="col">salida</th>

                
            </tr>
        </thead>
        <tbody>

        <?php foreach($espacios as $espacio): ?>


                


                <tr>
                    <td ><?php echo($espacio["estado"]) ?></td>
                    <td ><?php echo($espacio["placa"]) ?></td>
                    <td ><?php echo($espacio["marca"] ) ?></td>
                    <td ><?php echo($espacio["modelo"]) ?></td>
                    <td ><?php echo($espacio["color"]) ?></td>
                    <td ><?php echo($espacio["nomConductor"]) ?></td>
                    <td ><?php echo($espacio["ingreso"]) ?></td>
                    <td ><?php echo($espacio["salida"]) ?></td>
                </tr>       


            <?php endforeach?>
            
        </tbody>
    </table>
</div>
    </main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

