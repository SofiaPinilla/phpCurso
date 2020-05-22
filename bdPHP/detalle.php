<?php
include_once "dbDatos.php";
$conn=conexion();
    $plato=getPlato($conn,$_GET["id"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar Pinilla</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <?php include "head.php"?>
<div class="contenedor">
<div class="row">
    <div class="col s12 m6">
      <div class="card ">
        <div class="card-content white-text">
          <span class="card-title"><?=$plato["titulo"]?></span>
          <p class="card-title">Comensales: <?=$plato["numero_de_comensales"]?></p>
    <p class="card-text">Tipo de plato:<?=$plato["nombre"]?></p> 
        </div>
       
      </div>
    </div>

    </div>
  </div>
</body>
</html>