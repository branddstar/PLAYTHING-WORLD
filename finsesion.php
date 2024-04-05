<?php
session_start();
error_reporting(0);
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$_SESSION['nombre']=$nombre;
require('registro.php');

$consulta="SELECT * FROM registro where nombre='$nombre' and correo='$correo'";
$resultado=mysqli_query($conexion, $consulta);
$fillas=mysqli_fetch_array($resultado);
if($filas[''])







?>

