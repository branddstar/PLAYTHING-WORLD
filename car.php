
<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "pw";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (isset($_POST['carrito'])) {
    $cantidad = $_POST['correo'];
    $contraseña = $_POST['contra'];
    

    $insertarDatos = "INSERT INTO sesiones VALUES('', '$correo', '$contraseña')";
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
}