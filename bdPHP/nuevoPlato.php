<?php
include_once "dbDatos.php";
$conector=conexion();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <title>Bar Pinilla</title>
</head>
<body>
<?php include "head.php"?>
<div class="container">
    <div class="row">
        <form class="col s12" method="post" action="insertarPlato.php">
        <div class="row">
            <div class="input-field col s12">
            <input placeholder="Titulo" id="titulo" name="titulo" type="text" class="validate">
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            <input placeholder="comensales" id="numero_de_comensales" name="numero_de_comensales" type="number" class="validate">
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <select id="id_tipoplato" name="id_tipoplato" class="validate" >
                <option value="" disabled selected>Elige especialidad</option>
                <option value="0">Entrante</option>
                <option value="1">Primero</option>
                <option value="2">Segundo</option>
                </select>
                <label>Materialize Select</label>
            </div>
        </div>
        </div>
        <div class="row">
            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
            </button>
        </div>
        </form>
    </div>
    </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>   
</body>
</html>