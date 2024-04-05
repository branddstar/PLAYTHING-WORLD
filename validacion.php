<?php
session_start();
error_reporting(0);
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

$_SESSION['nombre']=$nombre;
require('perfil.php');
$insertarDatos = "INSERT INTO registro VALUES('', '$nombre', '$correo', '$contraseña')";
$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

$filas=mysqli_fecth_array($ejecutarInsertar);
if($filas['nombre']==1){
    header("location: perfil.php");
}else 
if($filas['correo']==2){
    header("location: perfil.php");
}else 
if($filas['contraseña']==3){
    header("location: perfil.php");
}else{
    ?>
    <?php
    include("Mi cuenta.html");
    ?>
    <center><h1>ERROR</h1></center>
    <?php
}
mysqli_free_result($ejecutarInsertar);
mysqli_close($enlace);
?>




































