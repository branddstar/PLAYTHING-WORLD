<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PLAYTHING WORLD</title>
    <link rel="stylesheet" href="ep.css" />
</head>
<body>
<header>

    <div class="container-navbar">
        <nav class="navbar container">
            <i class="fa-solid fa-bars"></i>
            <ul class="menu">
                <li><a href="Inicio.html">Volver a inicio</a></li>
                <li><a href="Carrito.html">Mi carrito</a></li>
            </ul>


        </nav>
    </div>
</header>

<h1>Editar Perfil</h1>
<form name="datos" method="post" action="inicarsesion.php">
    <form action="actualizar_perfil.php" method="POST">
        <label for="nombre_actual">Nombre actual:</label>
        <input type="text" id="nombre_actual" name="nombre_actual" value="Nombre actual del usuario" required><br><br>

        <label for="nombre_nuevo">Nombre nuevo:</label>
        <input type="text" id="nombre_nuevo" name="nombre_nuevo" placeholder="Nombre nuevo del usuario" required><br><br>

        <label for="email_actual">Email:</label>
        <input type="email" id="email_actual" name="email_actual" value="correo@actual.com" required><br><br>

        <label for="email_nuevo">Email nuevo:</label>
        <input type="email" id="email_nuevo" name="email_nuevo" placeholder="correo@nuevo.com" required><br><br>

        <label for="contraseña_actual">Contraseña:</label>
        <input type="password" id="contraseña_actual" name="contraseña_actual" required><br><br>

        <label for="contraseña_nueva">Contraseña nueva:</label>
        <input type="password" id="contraseña_nueva" name="contraseña_nueva" required><br><br>

        <label for="bio">Biografía:</label><br>
        <textarea id="bio" name="bio" rows="4" cols="50">Descripción actual del usuario</textarea><br><br>

        <input type="submit" value="Actualizar">
    </form>
</form>

<!-- Aquí puedes agregar o conectar otro archivo PHP -->

<!--https://www.youtube.com/watch?v=-a3KiOAfIdU-->
<!--https://www.youtube.com/watch?v=hO-a7SHrMLg-->
<!--https://www.youtube.com/watch?v=hO-a7SHrMLg-->

<script
        src="https://kit.fontawesome.com/81581fb069.js"
        crossorigin="anonymous"
></script>

</body>
</html>
