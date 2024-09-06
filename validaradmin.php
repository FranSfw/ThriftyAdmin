<?php
if (empty($_POST)) {
    header("Location:login_admin.php?error=300");
}
// Añadimos clases de validacion recicladas
include('C:/xampp/htdocs/ThriftyAdmin/config.php');
include('C:/xampp/htdocs/ThriftyAdmin/consultas.php');
$correo = $_POST["user"];
$pswd = $_POST["pswd"];
if (!empty($correo) || !empty($pswd)) {
    if (strpos($correo, "@admin.com") !== false) {
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
            header("Location:pageadmin.html");
        } else {
            header("Location: login_admin.php?error=100");
        }
        mysqli_close($connection);
    } else {
        header("Location: login_admin.php?error=400");
    }
} else {
    header("Location:login_admin.php?error=200");
}
?>