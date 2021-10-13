<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Modificar Pokemon</title>
</head>
<body>
<div class="w3-row">
    <a href="index.php"><img src="recursos/logo.jpg" style='width:100%'></a>
</div>
<?php
session_start();
$id_pokemon = $_POST['modificarPokemon'];

include_once "../Pokedex-AlejandroCruz/funciones/funcionesPokemon.php";

$modificar= buscarPokemon($id_pokemon);

/*
echo $modificar['id'];
echo $modificar['imagen_url'];
echo $modificar['nombre'];
echo $modificar['tipo'];
echo $modificar['descripcion'];
*/

echo "<div class='w3-container w3-card-4 w3-center' >
<form action='updatePokemon.php' method='post' id='desc' enctype='multipart/form-data'>
        <div class='w3-input w3-border'>
            <p>Numero</p>
            <p><input class='' type='text' name='numero' value=" . $modificar['id'] . " ></p>
        </div>
        <div class='w3-input w3-border'>
            <img src=" . $modificar['imagen_url'] . " alt=''>
            <p>Imagen: Debe ser menor a 1MB</p>
            <p><input class='' type='hidden' name='imagen_original' value=" . $modificar['imagen_url'] . "></p>
            <p><input class='' type='file' name='imagen_nueva' value=''></p>                
        </div>
        <div class='w3-input w3-border'>
            <p>Nombre</p>
            <p><input class='' type='text' name='nombre' value=" . $modificar['nombre'] . " ></p>
        </div>
        <div class='w3-input w3-border'>
            <!--<p>Tipo</p>-->
            <p> <input class='' type='hidden' name='tipo' value=" . $modificar['tipo'] . "></p>
            <label for=''>Tipo de Pokemon</label><br>
                <select name='tipo'>
                    <option>Agua</option>
                    <option>Fuego</option>
                    <option>Electrico</option>
                    <option>Aire</option>
                    <option>Planta</option>
                    <option selected> " . $modificar['tipo'] . "</option>
                </select>
        </div>
        <div class='w3-input w3-border'>
            <p>Descripcion</p>
            <p><textarea cols='30' rows='10' name='descripcion' form='desc'> " . $modificar['descripcion'] . " </textarea></p>
        </div>
        <div class='w3-input w3-border'>
            <p><input type='submit' name='enviar' value='Modificar'></p>
        </div>
        <div class='w3-input w3-border'>
            <a href='index.php'>Cancelar</a>
        </div>
    </form></div>
";

?>
</body>
</html>