<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Lista Pokemons</title>
</head>
<body>

<?php

require_once "../Pokedex-AlejandroCruz/recursos/db/config.php";

$conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB);

$sql = "SELECT * FROM pokemon";

$resultado = $conexion->query($sql);



while($lista = mysqli_fetch_assoc($resultado)) {

    /* Selector de Tipo*/
    $tipoPokemon = "";
    switch ($lista["tipo"]) {
        case "Fuego":
            $tipoPokemon = "../Pokedex-AlejandroCruz/recursos/tipos/TipoFuego.png";
            break;
        case "Agua":
            $tipoPokemon = "../Pokedex-AlejandroCruz/recursos/tipos/TipoAgua.png";
            break;
        case "Electrico":
            $tipoPokemon = "../Pokedex-AlejandroCruz/recursos/tipos/TipoElectrico.png";
            break;
        case "Aire":
            $tipoPokemon = "../Pokedex-AlejandroCruz/recursos/tipos/TipoAire.png";
            break;
        case "Planta":
            $tipoPokemon = "../Pokedex-AlejandroCruz/recursos/tipos/TipoPlanta.png";
            break;
        default:
            $tipoPokemon = "../Pokedex-AlejandroCruz/recursos/tipos/vacio.png";
    }

    echo "
<div class='w3-row w3-padding w3-margin' id='lista'>
    <div id='imagen' class = 'w3-col m4 l4 '><img style='width:100%' src=" . $lista["imagen_url"] . " '></div>
    <div id='nombre' class = 'w3-col m4 l2'><h2>" . $lista["nombre"] . "</h2></div>     
    <div id='tipo' class = 'w3-col m4 l2'><img style='width:20%' src=" . $tipoPokemon . " '></div>    
    <div id='texto' class = 'w3-col m4 l4'><p>" . $lista["descripcion"] . "</p></div>
</div> 
     " ;
}



?>



</body>
</html>