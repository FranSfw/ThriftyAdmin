<?php
function conectar()
{
    include("config.php");
    $connection = mysqli_connect($HOST, $USER, $PASSWORD, $NAMEBD) or die("No me conecté");
    return $connection;
}

function mostrarUsuarios()
{
    $connection = conectar();
    $query = "SELECT COUNT(`estatus`) AS `TotalUsuarios` FROM `usuario`;";
    $resultado = mysqli_query($connection, $query);
    if ($resultado && mysqli_num_rows($resultado) == 1) {
        $fila = mysqli_fetch_assoc($resultado);
        mysqli_close($connection);
        return $fila['TotalUsuarios'];
    } else {
        mysqli_close($connection);
        return "0";
    }
}

function mostrarActivo()
{
    $connection = conectar();
    $query = "SELECT COUNT(`estatus`) AS `TotalUsuarios` FROM `usuario` WHERE `estatus` = 'Activo';";
    $resultado = mysqli_query($connection, $query);
    if ($resultado && mysqli_num_rows($resultado) == 1) {
        $fila = mysqli_fetch_assoc($resultado);
        mysqli_close($connection);
        return $fila['TotalUsuarios'];
    } else {
        mysqli_close($connection);
        return "0";
    }
}

function mostrarBaja()
{
    $connection = conectar();
    $query = "SELECT COUNT(`estatus`) AS `TotalUsuarios` FROM `usuario` WHERE `estatus` = 'Baja';";
    $resultado = mysqli_query($connection, $query);
    if ($resultado && mysqli_num_rows($resultado) == 1) {
        $fila = mysqli_fetch_assoc($resultado);
        mysqli_close($connection);
        return $fila['TotalUsuarios'];
    } else {
        mysqli_close($connection);
        return "0";
    }
}

function mostrarListaNegra()
{
    $connection = conectar();
    $query = "SELECT COUNT(`estatus`) AS `TotalUsuarios` FROM `usuario` WHERE `estatus` = 'Lista Negra';";
    $resultado = mysqli_query($connection, $query);
    if ($resultado && mysqli_num_rows($resultado) == 1) {
        $fila = mysqli_fetch_assoc($resultado);
        mysqli_close($connection);
        return $fila['TotalUsuarios'];
    } else {
        mysqli_close($connection);
        return "0";
    }
}
?>