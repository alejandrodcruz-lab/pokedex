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
<?php
session_start();
?>
<div class="w3-row">
    <a href="index.php"><img src="recursos/logo.jpg" style='width:100%'></a>
</div>
<div class="w3-row w3-center">

    <div class="w3-container w3-card-4 w3-center">
        <form action="insertPokemon.php" method="post" id='desc' enctype="multipart/form-data">
            <div class="w3-input w3-border">
                <p>Numero</p>
                <p><input class="" type="text" name="numero" value=""></p>
            </div>
            <!---
            <div class="w3-input w3-border">
                <img src="" alt="">
                <p>Ruta</p>
                <p> <input class="" type="" name="imagen" value=""></p>
            </div>
            --->
            <div class="w3-input w3-border">
                <p>Imagen</p>
                <p><input class="" type="file" name="img" value=""></p>
            </div>
            <div class="w3-input w3-border">
                <p>Nombre</p>
                <p><input class="" type="text" name="nombre" value=""></p>
            </div>
            <div class="w3-input w3-border">
                <!---<p>Tipo</p>
                <p><input class="" type="text" name="tipo" value=""></p>-->
                <label for="">Seleccionar el tipo de Pokemon</label>
                <select name='tipo'>
                    <option>Agua</option>
                    <option>Fuego</option>
                    <option>Electrico</option>
                    <option>Aire</option>
                    <option>Planta</option>
                    <option selected></option>
                </select>

            </div>
            <div class="w3-input w3-border">
                <p>Descripcion</p>
                <textarea id="" cols="30" rows="10" name="descripcion" form="desc"></textarea>
            </div>
            <div class="w3-input w3-border">
                <p><input type="submit" name="enviar" value="Enviar"></p>
            </div>
            <div class="w3-input w3-border">
                <a href="index.php">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
