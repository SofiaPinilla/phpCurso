<?php
function conexion(){
    $conector = new mysqli("localhost", "root", "", "bar_pinilla");
    return $conector;
}

 function getPlatoConTipo($conector){
    $resultado = $conector->query("SELECT plato.id,plato.titulo,plato.numero_de_comensales, tipo_plato.nombre 
    FROM plato INNER JOIN 
    tipo_plato ON plato.id_tipoplato = tipo_plato.id;");
    return $resultado;
 
 }
 function getPlatos($conector){
    $resultado = $conector->query("SELECT id,titulo FROM plato");

        header('Location: index.php?msg=noId');

    return $resultado;
}
function getPlato($conector,$id){
    $resultadoObj = $conector->query("SELECT plato.id,plato.titulo,plato.numero_de_comensales, tipo_plato.nombre  FROM plato INNER JOIN 
    tipo_plato ON plato.id_tipoplato = tipo_plato.id WHERE plato.id=$id ");
    if($resultadoObj ==false){
        header('Location: index.php?msg=noId');
    }
    $resultado=$resultadoObj->fetch_assoc();
    return $resultado;
}

function nuevoPlato($conector,$titulo,$numero_de_comensales,$id_tipoplato){
    $consulta="INSERT INTO `plato` (`id`, `titulo`, `numero_de_comensales`, `id_tipoplato`) VALUES (NULL, '$titulo', $numero_de_comensales, $id_tipoplato)";
    $resultado = $conector->query($consulta);
    
}
?>
