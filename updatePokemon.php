<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar Pokemon</title>
</head>
<body>
<div class="w3-row">
    <a href="index.php"><img src="recursos/logo.jpg" style='width:100%'></a>
</div>
<?php

$id_pokemon = $_POST['numero'];
$img_pokemon = $_POST['imagen_original'];
$nombre_pokemon = $_POST['nombre'];
$tipo_pokemon = $_POST['tipo'];
$desc_pokemon = $_POST['descripcion'];

$nombre_imagen = $_FILES['imagen_nueva']['name'];
$tipe_imagen = $_FILES['imagen_nueva']['type'];
$size_imagen = $_FILES['imagen_nueva']['size'];

$dirArchivosNuevos = $_SERVER['DOCUMENT_ROOT'] . '/Pokedex-AlejandroCruz/recursos/img/';

if ($size_imagen == 0 || $size_imagen >= 1048576) {
    $dirDestino = $img_pokemon;
} else {
    $dirDestino = '../Pokedex-AlejandroCruz/recursos/img/' . $nombre_imagen;
    move_uploaded_file($_FILES['imagen_nueva']['tmp_name'], $dirArchivosNuevos . $nombre_imagen);
}
echo $id_pokemon;
echo $img_pokemon;
echo $nombre_pokemon;
echo $tipo_pokemon;
echo $desc_pokemon;

include_once "../Pokedex-AlejandroCruz/funciones/funcionesPokemon.php";

modificarPokemon($id_pokemon, $nombre_pokemon, $dirDestino, $tipo_pokemon, $desc_pokemon);

header("location:/Pokedex-AlejandroCruz/index.php");

?>

</body>
</html>