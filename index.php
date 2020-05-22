<?php
// //A lo bruto
// /*
// $platos=[
//     0=>[
//         "titulo"=>"Ensalada tomate",
//         "numero"=>4,
//         "tipo"=>"entrante",
//         "ingredientes"=>[
//                 "nombre"=>"lechuga",
//                 "cantidad"=>"100gr"
//                         ],[
//                 "nombre"=>"tomate",
//                 "cantidad"=>4                            
//                         ]

//     ],
//     1=>[
//     ]
// ]
// */
// //Definicion de ingredientes
// $ingredientes1=[
//     "nombre"=>"lechuga",
//     "cantidad"=>"100gr"
// ];
// $ingredientes2=[
//     "nombre"=>"tomate",
//     "cantidad"=>4
// ];
// $ingredientes3=[
//     "nombre"=>"arroz",
//     "cantidad"=>"500gr"
// ];
// //Definicion de los platos
// $plato1=[
//     "titulo"=>"Ensalada tomate",
//     "numero"=>4,
//     "tipo"=>"entrante",
//     "ingredientes"=>[]
// ];
// $plato1["ingredientes"][]=$ingredientes1;
// $plato1["ingredientes"][]=$ingredientes2;
// $plato2=[
//     "titulo"=>"Paella Valenciana",
//     "numero"=>4,
//     "tipo"=>"primero"
// ];
// $plato2["ingredientes"][]=$ingredientes3;
// //Añado los platos
// $carta=[];
// $carta[]=$plato1;
// $carta[]=$plato2;

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar Pinilla</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="titulo">Bar Pinilla</h1>
    <?php
    // $user=[
    //     'username'=>'Manolo77',
    //     'password'=>'123',
    //     'hobbies'=>['programming']
    // ];

    // $plato=[
    //     'Titulo'=>'ensalada',
    //     'Número de comensales'=>3,
    //     'tipo de plato'=>'entrante',
    //     "ingredientes"=>[
    //         "nombre"=>"lechuga",
    //         "cantidad"=>"100gr"
    //                 ],[
    //         "nombre"=>"tomate",
    //         "cantidad"=>4                            
    //                 ]
    // ];
    $platos = [
        'Entrante' => [
            'Titulo' => 'ensalada',
            'Número de comensales' => 3,
            'tipo de plato' => 'Entrante',
            "ingredientes" => [
                [
                "nombre" => "lechuga",
                "cantidad" => "100gr"
            ], 
            [
                "nombre" => "tomate",
                "cantidad" => 4
            ]
            ]
        ],
        'Primero' => [
            'Titulo' => 'Pure de Patata',
            'Número de comensales' => 6,
            'tipo de plato' => 'Primero',
            "ingredientes" => [[
                "nombre" => "patata",
                "cantidad" => 5
            ], [
                "nombre" => "leche",
                "cantidad" => "1L"
            ]
            ]
        ],
        'Segundo' => [
            'Titulo' => 'Espaguetis de calabacín con pesto',
            'Número de comensales' => 4,
            'tipo de plato' => 'Segundo',
            "ingredientes" => [
                [
                "nombre" => "Calabacín",
                "cantidad" => 2
            ], [
                "nombre" => "Tomates",
                "cantidad" => 6
            ], [
                "nombre" => "Pesto",
                "cantidad" => "a ojo"
            ]
            ]
        ]
    ];
    // foreach ($plato['ingredientes'] as $ingrediente) {
    //    echo $ingrediente.'<br/>';
    // }
    echo '<div class="platos">';
    foreach ($platos as $plato) {

        echo '<div class="contenedor"> Nombre: ' . $plato['Titulo'] . '<br/>';
        echo  'Número de comensales: ' . $plato['Número de comensales'] . '<br/>';
        echo  'Tipo de plato: ' . $plato['tipo de plato'] . '</div><br/>';
        echo 'Ingredientes: <br/><br/>';
        foreach ($plato["ingredientes"] as $key => $value) {
          
            echo  '<div> Nombre: ' .    $value['nombre'] . '</div><br/>';
            echo  '<div> Cantidad: '    . $value['cantidad'] . '</div><br/>';
        }
    }
    '</div>'





    // foreach ($platos as $key => $plato) {
    //     echo  'Nombre: '. $plato['Titulo'].'<br/>';
    //     echo  'Número de comensales: '. $plato[ 'Número de comensales'].'<br/>';
    //     echo  'Tipo de plato: '. $plato['tipo de plato'].'<br/>';
    //     echo  'Tipo de plato: '. $plato['ingredientes'].'<br/>';
    //     foreach ($plato[''] as $ingredientes) {
    //     echo  'ingredientes: '. $ingredientes["cantidad"].'<br/>';
    //     echo  'ingredientes: '. $ingredientes["nombre"].'<br/>';
    // }}
    // foreach ($plato as $key => $value) {
    //     if(gettype($value) !=='array')echo'<div class="contenedor">'. $key.': '.$value .'<div> <br/> ';
    //    else{

    //        foreach ($value as  $ingredient) {
    //           echo $ingredient .'<br/>';
    //        }
    //    }
    //     # code...
    // }

    // foreach($carta as $plato){
    //     //Recorre todos los platos
    //     //Plato 1, Plato 2, ...
    //     foreach($plato as $clave => $valor){
    //         //Recorre todos los elementos de 1 plato
    //         //titulo, comensales
    //         if($clave==="ingredientes"){
    //             //Me tengo que parar en el array de ingredientes
    //             foreach($valor as $ingrediente){
    //                 //Recorro todos los ingredientes
    //                 //nombre, cantidad
    //                 echo "<div>";
    //                 echo $plato["titulo"]." ";
    //                 var_dump($ingrediente);
    //                 echo "</div>";
    //             }
    //         }else{
    //             //Muestra un elemento
    //         }
    //     }
    // }
    ?>
</body>

</html>