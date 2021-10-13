<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Pokemon</title>
</head>
<body>

<?php

$id_pokemon = $_POST['numero'];
$img_pokemon = $_POST['imagen'];
$nombre_pokemon = $_POST['nombre'];
$tipo_pokemon = $_POST['tipo'];
$desc_pokemon = $_POST['descripcion'];

$nombre_imagen = $_FILES['img']['name'];
$tipe_imagen = $_FILES['img']['type'];
$size_imagen = $_FILES['img']['size'];

// Ruta destino
$dirDestino = $_SERVER['DOCUMENT_ROOT'] . '/Pokedex-AlejandroCruz/recursos/img/';

move_uploaded_file($_FILES['img']['tmp_name'],$dirDestino.$nombre_imagen);

echo $id_pokemon;
echo $img_pokemon;
echo $nombre_pokemon;
echo $tipo_pokemon;
echo $desc_pokemon;

include_once "../Pokedex-AlejandroCruz/funciones/funcionesPokemon.php";

altaPokemon($id_pokemon,$nombre_pokemon,$tipo_pokemon,$desc_pokemon,$nombre_imagen);

header("location:/Pokedex-AlejandroCruz/index.php");

?>

</body>
</html>