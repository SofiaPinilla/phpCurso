<?php
    require_once "dbDatos.php";
    $connector=conexion();
    $platos=getPlatos($connector);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        var_dump($_POST);
        nuevoPlato($connector,$_POST['titulo'],$_POST['numero_de_comensales'],$_POST['id_tipoplato']);
    ?>
</body>
</html>