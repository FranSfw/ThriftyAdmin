<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adminthrifty";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }

    // Obtener los valores del formulario
    $first_name = $_POST['name'];
    $last_name = $_POST['apellido'];
    $gender = $_POST['gender'];
    $date_of_birth = $_POST['nacimiento'];
    $curp = $_POST['CURP'];
    $rfc = $_POST['RFC'];
    $personal_email = $_POST['email'];
    $confirm_personal_email = $_POST['conemail'];
    $phone_number = $_POST['phone'];
    $work_email = $_POST['workemail'];
    $password = $_POST['password'];
    $confirm_password = $_POST['conpassword'];
    $address = $_POST['address'];
    $type = $_POST['type'];
    $postal_code = $_POST['CP'];
    $city = $_POST['city'];

    // Validar campos obligatorios (puedes añadir más validaciones según sea necesario)
    if ($password !== $confirm_password) {
        die("Las contraseñas no coinciden.");
    }

    if ($personal_email !== $confirm_personal_email) {
        die("Los correos electrónicos no coinciden.");
    }

    // Inserción en la base de datos
    $sql1 = "INSERT INTO empleado (Nombre, Apellidos, Genero, Nacimiento, CURP, RFC, Correo, Telefono, Direccion, type, cp, ciudad)
VALUES ('$first_name', '$last_name', '$gender', '$date_of_birth', '$curp', '$rfc', '$personal_email', '$phone_number', '$address', '$type', '$postal_code', '$city')";

    $sql2 = "INSERT INTO usuario (correo, pswd)
VALUES ('$work_email', '$password')";


    if ($conn->query($sql1, ) === TRUE) {
        echo "Nuevo empleado creado exitosamente";

        if ($conn->query($sql2, ) === TRUE) {
            echo "Nuevo empleado creado exitosamente";
            header("Location:new_user.php");

        } else {
            echo "Error: " . $sql1 . "<br>" . $conn->error;
        }

    }




    // Cerrar la conexión
    $conn->close();
    ?>

</body>

</html>