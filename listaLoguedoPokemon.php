<?php

require_once "../Pokedex-AlejandroCruz/recursos/db/config.php";

$conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB);

$sql = "SELECT * FROM pokemon";

$resultado = $conexion->query($sql);

while ($lista = mysqli_fetch_assoc($resultado)) {

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
    <div id='imagen' class = 'w3-col w3-container m4 l3'><img style='width:100%' src=" . $lista["imagen_url"] . " '></div>
    <div id='nombre' class = 'w3-col w3-container m4 l2'><h2>" . $lista["nombre"] . "</h2></div>     
    <!--<div id='tipo' class = 'w3-col w3-container m4 l2'><p>" . $lista["tipo"] . "</p></div>-->
    <div id='tipo' class = 'w3-col w3-container m4 l2''><img style='width:20%' src=" . $tipoPokemon . " '></div>  
    <div id='texto' class = 'w3-col w3-container m4 l3'><p>" . $lista["descripcion"] . "</p></div>
    <div id='boton'>
    <div class = 'w3-col w3-container m4 l2'> <form action='modificarPokemon.php' method='post'>
                        <input type='hidden' name='modificarPokemon' value='" . $lista["id"] . "'>
                        <input type='submit' name='update' value='Modificar' /> </form></div>
    <div class = 'w3-col w3-container m4 l2'> <form action='deletePokemon.php' method='post'>
                        <input type='hidden' name='borrarPokemon' value='" . $lista["id"] . "'>
                        <input type='submit' name='delete' value='Eliminar' /> </form></div>
    </div>
</div>   
     ";
}
?>
