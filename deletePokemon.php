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

$id_pokemon = $_POST['borrarPokemon'];

echo $id_pokemon;

include_once "../Pokedex-AlejandroCruz/funciones/funcionesPokemon.php";

bajaPokemon($id_pokemon);

header("location:/Pokedex-AlejandroCruz/index.php");

?>

</body>
</html>