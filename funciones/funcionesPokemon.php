<?php
function altaPokemon($id,$nombrePokemon,$tipoPokemon,$descPokemon,$img){
    require_once "../Pokedex-AlejandroCruz/recursos/db/config.php";
    $conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB);
    $imagenURL = "../Pokedex-AlejandroCruz/recursos/img/" . $img;

    $sql = "INSERT INTO pokemon (ID,NOMBRE,IMAGEN_URL,TIPO,DESCRIPCION) values ('$id','$nombrePokemon','$imagenURL','$tipoPokemon','$descPokemon')";

    $resultado = $conexion->query($sql);

    if ($conexion->errno) {
        echo "Error al subir";
    } else {
        echo "Registrado exitosamente";
        echo $conexion->affected_rows;
    }
}

function bajaPokemon($id){
    require_once "../Pokedex-AlejandroCruz/recursos/db/config.php";
    $conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB);

    $sql = "DELETE FROM pokemon where id = '$id'";

    $resultado = $conexion->query($sql);

    if ($conexion->errno) {
        echo "Error al eliminar";
    } else {
        echo "Eliminado exitosamente";
        echo $conexion->affected_rows;
    }

}

function buscarPokemon($id){
    require_once "../Pokedex-AlejandroCruz/recursos/db/config.php";
    $conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB);

    $sql = "SELECT * FROM pokemon where id = '$id'";

    $resultado = $conexion->query($sql);

    if ($conexion->errno) {
        echo "Error al buscar";
    } else {
        echo "Encontrado";
        $listaPokemon = mysqli_fetch_assoc($resultado);

        return $listaPokemon;
    }
}


function listarPokemons(){
    require_once "../Pokedex-AlejandroCruz/recursos/db/config.php";
    $conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB);

    $sql = "SELECT * FROM pokemon";

    $resultado = $conexion->query($sql);

    if ($conexion->errno) {
        echo "Error al buscar";
    } else {
        echo "Buscado exitosamente";
        echo $conexion->affected_rows;

        $listaPokemon = mysqli_fetch_assoc($resultado);

        return $listaPokemon;

        /*
        while($pokemon = mysqli_fetch_assoc($resultado)){
        echo "<br>";


        echo $pokemon["id"] . "-" . $pokemon["nombre"];}
        */
    }

}

function modificarPokemon($id,$nombre,$imagen_url,$tipo,$descripcion){
    require_once "../Pokedex-AlejandroCruz/recursos/db/config.php";

    //$imagenURL = "../Pokedex-AlejandroCruz/recursos/img/" . $imagen_url;

    $conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB);

    $sql = "UPDATE pokemon SET id = '$id', nombre = '$nombre', imagen_url = '$imagen_url',tipo ='$tipo', descripcion= '$descripcion' 
            WHERE  id = '$id'";

    $resultado = $conexion->query($sql);

    if ($conexion->errno) {
        echo "Error al eliminar";
    } else {
        echo "Modificacion exitosa";
        echo $conexion->affected_rows;
    }
}

function obtenerDescripcion($id){
    require_once "../Pokedex-AlejandroCruz/recursos/db/config.php";
    $conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB);

    $sql = "SELECT descripcion FROM pokemon where id = '$id'";

    $resultado = $conexion->query($sql);

    if ($conexion->errno) {
        echo "Error al buscar";
    } else {
        echo "Se encontro descripcion";
        $descPokemon = mysqli_fetch_assoc($resultado);
        return $descPokemon;
    }

}
?>


