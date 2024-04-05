<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "pw";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (isset($_POST['registro'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    

    $insertarDatos = "INSERT INTO registro VALUES('', '$nombre', '$correo', '$contraseña')";
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
}
?>

<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "pw";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (isset($_POST['sesiones'])) {
    $correo = $_POST['correo'];
    $contraseña = $_POST['contra'];
    

    $insertarDatos = "INSERT INTO sesiones VALUES('', '$correo', '$contraseña')";
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
}
?>