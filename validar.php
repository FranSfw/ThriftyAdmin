<?php
if (empty($_POST)) {
    header("Location:index.php?error=300");
}
// Añadimos clases de validacion recicladas
include('C:/xampp/htdocs/ThriftyAdmin/config.php');
include('C:/xampp/htdocs/ThriftyAdmin/consultas.php');
$correo = $_POST["user"];
$pswd = $_POST["pswd"];
if (!empty($correo) || !empty($pswd)) {
    #$query = "SELECT correo, pswd FROM usuario WHERE correo = $correo AND pswd = "  . "MD5(" . "'" . $pswd . "'" . ");";
    $query = "SELECT correo, pswd FROM usuario WHERE correo = '$correo' AND pswd = $pswd;";
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