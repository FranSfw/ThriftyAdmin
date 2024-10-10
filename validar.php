<?php
if (empty($_POST)) {
    header("Location: index.php?error=300");
    exit;
}
include('config.php');
include('consultas.php');
$correo = $_POST["correo"];
$password = $_POST["password"];
$hash_sha256 = hash('sha256', $password);
if (!empty($correo) && !empty($hash_sha256)) {
    $connection = conectar();
    $correo = mysqli_real_escape_string($connection, $correo);
    $password = mysqli_real_escape_string($connection, $hash_sha256);
    $query = "SELECT *
              FROM datos_empleado 
              WHERE `correo` = '$correo' 
              AND `password` = '$hash_sha256';";
    $resultado = mysqli_query($connection, $query);
    if ($resultado && mysqli_num_rows($resultado) == 1) {
        $fila = mysqli_fetch_assoc($resultado);
        if ($fila['estatus'] == 'Activo') {
            if (
                $fila['puesto'] == 'Gerente de sucursal' ||
                $fila['puesto'] == 'Supervisor de operaciones' ||
                $fila['puesto'] == 'Gerente de operaciones' ||
                $fila['puesto'] == 'Asistente de gerencia'
            ) {
                header("Location: pageadmin.php");
                exit;
            } elseif (
                $fila['puesto'] == 'Cajero' ||
                $fila['puesto'] == 'Mostrador' ||
                $fila['puesto'] == 'Ayudante de almacén'
            ) {
                header("Location: page.php");
                exit;
            }
        } else {
            header("Location: index.php?error=400");
            exit;
        }
    } else {
        header("Location: index.php?error=100");
        exit;
    }
    mysqli_close($connection);
} else {
    header("Location: index.php?error=200");
    exit;
}
?>