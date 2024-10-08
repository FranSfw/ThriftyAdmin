<?php
if (empty($_POST)) {
    header("Location:index.php?error=300");
}
// Añadimos clases de validacion recicladas
include('C:/xampp/htdocs/ThriftyAdmin/config.php');
include('C:/xampp/htdocs/ThriftyAdmin/consultas.php');
$correo = $_POST["correo"];
$password = $_POST["password"];
if (!empty($correo) || !empty($password)) {
    #$query = "SELECT correo, password FROM usuario WHERE correo = $correo AND password = "  . "MD5(" . "'" . $password . "'" . ");";
    $query = "SELECT datos_empleado.correo, datos_empleado.password FROM datos_empleado WHERE datos_empleado.correo = '$correo' AND datos_empleado.password = '$password';";
    conectar();
    $resultado = mysqli_query(conectar(), $query) or die("No me conecté");
    $fila = mysqli_fetch_assoc($resultado);
    if ($resultado->num_rows == 1) {
        session_start();
        $_SESSION["validada"] = 1;
        $_SESSION["Nombre"] = $fila["nombre"] . " " . $fila["apellido1"] . " " . $fila["apellido2"];
        $_SESSION["correo"] = $fila["correo"];
        header("Location:page.html");
    } else {
        header("Location: index.php?error=100");
    }
    mysqli_close($connection);
} else {
    header("Location:index.php?error=200");
}
?>