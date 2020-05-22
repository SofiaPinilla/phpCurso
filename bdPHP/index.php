<?php
include_once "dbDatos.php";
$conector=conexion();
$platos=getPlatoConTipo($conector);
?>
<!DOCTYPE html>
<html lang="en">
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
<h1 class="titulo">Bar Pinilla</h1>
<div class="contenedor">
<?php
            foreach($platos as $plato){
                ?>
                <div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-content white-text">
          <span class="card-title"><?=$plato["titulo"]?></span>
         
        <div class="card-action">
        <a class="enlace" href="detalle.php?id=<?=$plato["id"]?>">Detalle del plato</a>
        </div>
      </div>
    </div>
  </div>
             
      
                <?php
            }
        ?>

</div>
</body>
</html>