<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="recursos/css/estilos.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Busqueda</title>
</head>
<body class="w3-container">

<div class="w3-row">
    <a href="index.php"><img src="recursos/logo.jpg" style='width:100%'></a>
</div>
<div class="w3-row w3-center">

    <?php
    session_start();
    $key = $_POST["clave"];

    //echo $key;
    require_once "recursos/db/config.php";


    $conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB);

    $sql = "SELECT * FROM pokemon where UPPER(id) LIKE UPPER('%$key%')
					  OR UPPER(nombre) LIKE UPPER('%$key%')
                      OR UPPER(tipo) LIKE UPPER('%$key%')";

    $resultado = $conexion->query($sql);
    $cont = $conexion->affected_rows;
    //echo $cont;

    if (!$cont == 0) {
        if (isset($_SESSION["sesion"])) {
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
                <div class='w3-row w3-padding w3-margin' id='lista'' >
                    <div id='imagen' class = 'w3-col w3-container m4 l3'><img style='width:100%' src=" . $lista["imagen_url"] . " '></div>
                    <div id='nombre' class = 'w3-col w3-container m4 l2'><h2>" . $lista["nombre"] . "</h2></div>     
                    <!--<div id='tipo' class = 'w3-col w3-container m4 l2'><p>" . $lista["tipo"] . "</p></div>-->
                    <div id='tipo' class = 'w3-col w3-container m4 l2'><img style='width:20%' src=" . $tipoPokemon . " '></div>   
                    <div id='texto' class = 'w3-col w3-container m4 l3'><p>" . $lista["descripcion"] . "</p></div>
                    <div class = 'w3-col w3-container m4 l2'> <form action='modificarPokemon.php' method='post'>
                                        <input type='hidden' name='modificarPokemon' value='" . $lista["id"] . "'>
                                        <input type='submit' name='update' value='Modificar' /> </form></div>
                    <div class = 'w3-col w3-container m4 l2'> <form action='deletePokemon.php' method='post'>
                                        <input type='hidden' name='borrarPokemon' value='" . $lista["id"] . "'>
                                        <input type='submit' name='delete' value='Eliminar' /> </form></div>
                </div>   
     ";
            }
        } else {
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
            <div class='w3-row w3-padding w3-margin' id='lista'' >
                <div id='imagen' class = 'w3-col w3-container m4 l3'><img style='width:100%' src=" . $lista["imagen_url"] . " '></div>
                <div id='nombre' class = 'w3-col w3-container m4 l2'><h2>" . $lista["nombre"] . "</h2></div>  
                <!--<div id='tipo' class = 'w3-col w3-container m4 l2'><p>" . $lista["tipo"] . "</p></div>-->
                <div id='tipo' class = 'w3-col w3-container m4 l2'><img style='width:20%' src=" . $tipoPokemon . " '></div>   
                <div id='texto' class = 'w3-col w3-container m4 l3'><p>" . $lista["descripcion"] . "</p></div>
            </div>
     ";
            }
        }
    } else {
        echo "<div class='w3-container'><h4>NO ENCONTRADO</h4></div> 
            <a href='index.php'>Regresar al Inicio</a>
            ";
    }


    ?>

</body>
</html>