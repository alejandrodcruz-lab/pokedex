<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="recursos/css/estilos.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Pokedex</title>
</head>
<body class="w3-container">
<!-- SECCION LOGIN -->
<header>
    <div class="w3-rows">

        <div class="w3-row">
            <a href="index.php"><img src="recursos/logo.jpg" style='width:100%'></a>
        </div>

        <div class="w3-row w3-center ">

            <?php
            session_start();
            if (isset($_POST["enviar"]) && !isset($_SESSION["sesion"])) {

                require_once "../Pokedex-AlejandroCruz/recursos/db/config.php";

                $usuario = $_POST["usuario"];
                $password = $_POST["password"];

                $conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB);

                $sql = "SELECT * FROM usuario WHERE USUARIO = '$usuario' AND CLAVE = '$password'";

                $resultado = $conexion->query($sql);

                if ($conexion->affected_rows) {
                    session_destroy();
                    session_start();

                    $_SESSION["sesion"] = $usuario;

                } else {

                    echo "<div class='w3-row w3-orange' > <p>USUARIO NO ENCONTRADO</p></div>";
                }
            }
            ?>
            <?php

            if (!isset($_SESSION["sesion"])) {
                include_once "login.php";

            } else {

                echo "<div class='w3-blue w3-padding'>
                 <form action='logout.php'> 
                 <label for=''>USUARIO: </label>" . $_SESSION["sesion"] . "<br>
                 <input type='submit' name='desloguear' value='Desconectar'>
                 </form>
            </div>";
            }

            ?>
        </div>
    </div>
</header>
<!-- SECCION BUSQUEDA DE POKEMONS -->
<section>
    <div class='w3-green w3-padding w3-center'>
        <form action="busquedaPokemon.php" method="post">
            <input type="text" name="clave" value="">
            <input type="submit" name="buscar" value="Buscar">
        </form>
    </div>
</section>
<section>
    <!-- ALTA NUEVO POKEMON -->
    <?php
    if (isset($_SESSION["sesion"])) {
        echo " <div class='w3-container w3-padding w3-center w3-red'>
        <a href='altaPokemon.php'>Ingresar nuevo Pokemon</a>
    </div>";
    }
    ?>
</section>
<!-- SECCION LISTADO DE POKEMON DESLOGUEADO/LOGUEADO -->
<section>
    <div class="w3-padding">
        <?php

        if (!isset($_SESSION["sesion"])) {
            include_once "listaPokemons.php";
        } else {
            include_once "listaLoguedoPokemon.php";
        }

        ?>
    </div>
</section>


</body>
</html>