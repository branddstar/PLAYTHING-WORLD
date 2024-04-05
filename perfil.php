<?php
session_start();
include("registro.php");
$nombre=$_SESSION['nombre'];
$sql="SELECT nombre, correo, contraseña FROM registro p WHERE nombre='".$nombre."'";
$ejecutarInsertar=$enlace->query($sql);

while($data=$ejecutarInsertar->fetch_assoc()){
    $nombre=$data['nombre'];
    $correo=$data['correo'];
    $contraseña=$data['contraseña'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="lol.css">
    <style>
        		@import url('https://fonts.googleapis.com/css2?family=Mali:wght@300;400;500;600;700&display=swap');

        /* Estilos adicionales */
        body {
            font-family: Mali;
            margin: 0;
            padding: 0;
        }
        .container-navbar {
            background-color: var(--primary-color);
            display: flex;
            justify-content: center;
            padding: 2rem 0;
        }
        .navbar {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 1200px;
            padding: 0 20px;
        }
        .menu {
            display: flex;
            gap: 2rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .menu li {
            margin: 0;
            padding: 0;
        }
        .menu a {
            text-decoration: none;
            font-size: 1.5rem;
            color: var(--dark-color);
            font-weight: 600;
            text-transform: uppercase;
            position: relative;
        }
        .menu a::after {
            content: '';
            width: 1.5rem;
            height: 1px;
            background-color: #fff;
            position: absolute;
            bottom: -3px;
            left: 50%;
            transform: translate(-50%, 50%);
            opacity: 0;
            transition: all .3s ease;
        }
        .menu a:hover::after {
            opacity: 1;
        }
        .menu a:hover {
            color: #fff;
        }
        .Datos_usuario {
            border: 5px solid black;
            max-width: 90%;
            margin: 20px auto;
            padding: 20px;
            background: red;
            text-align: center;
        }
        .titulo {
            text-decoration-line: underline;
            margin-bottom: 20px;
        }
        h1 {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container-navbar">
        <nav class="navbar container">
            <ul class="menu">
                <li><a href="#"><?php echo $nombre; ?></a></li>
                <li><a href="#">MI PERFIL</a></li>
                <li><a href="Carrito.php">MI CARRITO</a></li>
                <li><a href="Mi cuenta.html">SALIR</a></li>
            </ul>
        </nav>
    </div>
    <h1>¡BIENVENID@, <?php echo $nombre; ?>!</h1>
    <div class="Datos_usuario">
        <h2 class="titulo">Datos del perfil</h2>
        <h3>Nombre: <?php echo $nombre;?></h3>
        <br>
        <h3>Correo: <?php echo $correo;?></h3>
        <br>
        <h3>Contraseña: <?php echo $contraseña;?></h3>
        <br>
    </div>
</body>
</html>


