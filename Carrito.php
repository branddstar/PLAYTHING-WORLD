<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mi carrito</title>
    <link rel="stylesheet" href="car.css" />
    <style>
        /* Estilos CSS aquí */
        @import url('https://fonts.googleapis.com/css2?family=Mali:wght@300;400;500;600;700&display=swap');

        :root {
            --primary-color: #ffc8dd;
            --background-color: #bde0fe;
            --dark-color: #151515;
        }

        html {
            font-size: 62.5%;
            font-family: 'Mali';
            scroll-behavior: smooth;
        }

        /* ... Estilos anteriores ... */

        /* SECCION RESPONSIVE */
        @media screen and (max-width: 850px) {
            .container-navbar {
                padding: 0.5rem 0;
            }

            .menu {
                gap: 2rem;
            }

            .container-logo img {
                width: 15%; /* Reducir tamaño del logo */
            }

            .container-user .fa-user,
            .container-user .fa-basket-shopping {
                font-size: 2.5rem; /* Reducir tamaño de los iconos */
            }

            .search-form input {
                width: 15rem; /* Reducir tamaño del input de búsqueda */
            }

            /* Modificar el diseño de los items en el carrito */
            .carrito,
            .contenedor .contenedor-items .item {
                width: 100%; /* Ajustar ancho en pantallas pequeñas */
                margin: 1rem auto; /* Espaciado entre elementos */
            }

            .carrito .carrito-item img {
                max-width: 100px; /* Limitar ancho de la imagen en el carrito */
            }

            .carrito-total .btn-pagar {
                padding: 1rem; /* Ajustar espaciado del botón de pago */
            }
        }
        body {
            font-family: Mali;
            margin: 0;
            padding: 0;
        }
        .container-navbar {
            background-color: var(--primary-color);
            display: flex;
            justify-content: center;
            padding: 1rem 0;
        }
        .navbar {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 500px;
            padding: 0 25px;
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
            font-size: 1rem;
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
        h1 {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body class="">
    <div class="container-navbar">
        <nav class="navbar container">
            <ul class="menu">
                <li><a href="#"> <?php echo isset($_SESSION['nombre']) ? $_SESSION['nombre'] : 'Usuario'; ?></a></li>
                <li><a href="perfil.php">MI PERFIL</a></li>
                <li><a href="#">MI CARRITO</a></li>
                <li><a href="Mi cuenta.html">SALIR</a></li>
            </ul>
        </nav>
    </div>
    <header>
        <h1>Mi carrito de compras</h1>
    </header>
    <section class="contenedor">
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">Paquete PW</span>
                <img src="Imagenes/IMG-20240305-WA0091.jpg" alt="" class="img-item">
                <span class="precio-item">$200.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
        </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>
            <div class="carrito-items">
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">$200.00</span>
                </div>
                <button class="btn-pagar" name="boton">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>
    <script src="car.js"></script>
    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</body>
</html>