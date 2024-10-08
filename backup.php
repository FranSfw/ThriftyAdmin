<?php
// Configura los detalles de conexión y el archivo de destino del backup
$usuario = "root";           // Usuario de MySQL
$password = "root";              // Contraseña de MySQL
$servidor = "localhost";     // Servidor de MySQL
$basededatos = "adminthrifty";    // Nombre de la base de datos a respaldar
$rutaBackup = "backups/backup.sql";  // Ruta donde guardar el backup

// Ruta completa al comando mysqldump
$ruta_mysqldump = 'C:/xampp/mysql/bin/mysqldump.exe';  // Ajusta según tu instalación

// Comando mysqldump con la ruta completa
$comando = "$ruta_mysqldump --opt -h $servidor -u $usuario -p$password $basededatos > $rutaBackup";

// Ejecutar el comando en el servidor
exec($comando . " 2>&1", $output, $result);  // Capturamos la salida y el código de error

// Verificar el resultado y devolver un mensaje
if ($result == 0) {
    echo "Backup realizado correctamente en " . $rutaBackup;
} else {
    // Si hay un error, mostramos el output para más detalles
    echo "Error al realizar el backup: " . implode("\n", $output);
}
?>