<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Acceder o Registrate</title>
		<link rel="stylesheet" href="MC.css" />
	</head>
	<style>
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
.hola{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 68rem;
      /*  background-image: linear-gradient(100deg, #000000, #00000020), url('Imagenes/Fondo.jpg');
        height: 100rem;
        background-size: cover;
        background-repeat: center;*/
}
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}


/*UTILIDADES*/
.container {
	max-width: 120rem;
	margin: 0 auto;
}

.heading-1 {
	text-align: center;
	font-weight: 500;
	font-size: 3rem;
}


/*HEADER*/
.container-hero {
	background-color: var(--background-color);
}

.hero {
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 2rem 0;
}

.customer-support {
	display: flex;
	align-items: center;
	gap: 2rem;
}

.customer-support i {
	font-size: 3.3rem;
}

.content-customer-support {
	display: flex;
	flex-direction: column;
}

.container-logo {
	display: flex;
	align-items: center;
	gap: 0.5rem;
text-align: center;

}
.container-logo img{
	display: block;
	margin: 0 auto;
	width: 20%;
height: auto;
}

.container-logo i {
	font-size: 3rem;
}

.container-logo h1 a {
	text-decoration: none;
	color: #000;
	font-size: 3rem;
	text-transform: uppercase;
	letter-spacing: -1px;
}

.container-user {
	display: flex;
	gap: 1rem;
	cursor: pointer;
}

.container-user .fa-user{
	font-size: 3rem;
	color: var(--primary-color);
	padding-right: 2.5rem;
	border-right: 1px solid #e2e2e2;
}

.container-user .fa-basket-shopping{
	font-size: 3rem;
	color: var(--primary-color);
	padding-left: 1rem;
}
.content-shopping-cart{
	display: flex;
	flex-direction: column;
}
 

/*NAVBAR*/
.container-navbar{
background-color: var(--primary-color);
}

.navbar{
	display:flex;
	justify-content: space-between;
	align-items: center;
	padding: 1rem 0;
}

.navbar .fa-bars{
	display: none;
}

.menu{
	display:flex;
	gap: 2rem;
}

.menu li{
	list-style: none;
}

.menu a{
	text-decoration: none;
	font-size: 1.3rem;
	color: var(--dark-color);
	font-weight: 600;
	text-transform: uppercase;
	position: relative;
}

.menu a::after{
	content: '';
	width: 1.5rem;
	height: 1px;
	background-color: #fff;
	position: absolute;
	bottom: -3px;
	left:50%;
	transform:translate(-50%, 50%);
	opacity:0;
transition: all .3s ease;
}

.menu a:hover::after{
	opacity: 1;
}

.menu a:hover{
	color: #fff;
}

.search-form{
	position: relative;
	display: flex;
	align-items: center;
	border: 2px solid #fff;
	border-radius: 2rem;
	background-color: #fff;
	height: 4.4rem;
	overflow: hidden;
}

.search-form input{
	outline: none;
	font-family: Verdana, Geneva, Tahoma, sans-serif;
	border: none;
	width: 25rem;
	font-size: 1.4rem;
	padding: 0 2rem;
	color: #777;
	cursor: pointer;
}

.search-form input::-webkit-search-cancel-button{
	appearance: none;
}

.search-form .btn-search{
	border: none;
	background-color: var(--primary-color);
	display: flex;
	align-items: center;
	justify-content: center;
	height: 100%;
	padding: 1rem;
}

.btn-search i{
	font-size: 2rem;
	color: #fff;
}
/*BANNER*/
.banner{
	background-image: linear-gradient(100deg, #dfaea1, #00000020), url('Imagenes/Fondo.jpg');
	height: 69rem;
	background-size: cover;
	background-repeat: center;
}

.content-banner{
	max-width: 90rem;
	margin: 0 auto;
	padding: 25rem 0;
	text-align: center;
}

.content-banner p{
color: black;
font-size: 1.2rem;
margin-bottom: 1rem;
font-weight: 500;
}

.content-banner h2{
color: #fff;
font-size: 3.5rem;
font-weight: 500;
line-height: 1.2;
}

.content-banner a{
margin-top: 2rem;
text-decoration: none;
color: black;
background-color: var(--primary-color);
display: inline-block;
padding: 1rem 3rem;
text-transform: uppercase;
border-radius: 3rem;
}

/*MI CUENTA*/
.container-form{
margin-top: 10px;
display: flex;
height: 500px;
max-width: 900px;
border-radius: 20px;
box-shadow: 0 5px 7px rgba(0, 0, 0, .1);
transition: all 1s ease;
margin: 10px;
}
.information{
    width: 40%;
    display: flex;
    align-items: center;
    text-align: center;
    background-color: var(--primary-color);
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
}
.info-childs{
    width: 100%;
    padding: 0 30px;
}
.info-childs h2{
    font-size: 2.5rem;
    color: #333;
}
.info-childs p{
    margin: 15px 0;
    color: #151515;
}
.info-childs input{
    background-color: transparent;
    outline: none;
    border-radius: 20px;
    padding: 10px 20px;
    color: var(--background-color);
    cursor: pointer;
    transition: background-color .3s ease;
}
.info-childs input:hover{
    background-color: var(--background-color);
    border: none;
    color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, .1);
}

.form-information{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 60%;
    text-align: center;
    background-color: rgb(198, 216, 210);
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
}
.form-information-childs{
    padding: 0 30px;
}
.form-information-childs h2{
    color: #333;
    font-size: 2rem;
}
.form-information-childs p{
    color: #555;
}
.icons{
    margin: 15px 0;
}
.icons i{
    border-radius: 50%;
    padding: 15px;
    cursor: pointer;
    margin: 0 10px;
    color: #9191bd;
    border: solid thin black;
    transition: var(--background-color) 0.3s ease;
    box-shadow: 0 2px 5px rgba(0, 0, 0, .1);
}
.icons i:hover{
    background-color: #ffc8dd;
    color: #fff;
}
.form{
    margin: 30px 0 0 0;
}
.form label{
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    border-radius: 20px;
    padding: 0 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, .1);
}
.form label input{
    width: 100%;
    padding: 15px;
    background-color: #fff;
    border: none;
    outline: none;
    border-radius: 20px;
    color: #333;
}
.form label i{
    color: #a7a7a7;
}
.form input[type="submit"]{
    background-color: var(--primary-color);
    color: #fff;
    border-radius: 20px;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    margin-top: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, .1);
}
.form input[type="reset"]:hover{
    background-color: #9191bd;
}
.form input[type="reset"]{
    background-color: var(--primary-color);
    color: #fff;
    border-radius: 20px;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    margin-top: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, .1);
}
.form input[type="submit"]:hover{
    background-color: #9191bd;
}
.hide{
    position: absolute;
    transform: translatey(-300%);
}


/*adaptibilidad*/
@media screen and (max-width:750px) {
    html{
        font-size: 12px;
    }
    
}

@media screen and (max-width:580px) {
    html{
        font-size: 10px;
    }
    
    .container-form{
        flex-direction: column;
        height: auto;
    }
    .information{
        width: 100%;
        padding: 20px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
    }
    .form-information{
        width: 100%;
        padding: 20px;
        border-bottom-left-radius: 20px;
        border-top-right-radius: 0px;
    }
}
		</style>
	<body>
		<header>
			<div class="container-hero">
				<div class="container hero">
					<div class="customer-support">
						<i class="fa-solid fa-headset"></i>
						<div class="content-customer-support">
							<span class="text">Soporte Técnico</span>
							<span class="number">5618361640</span>
						</div>
					</div>

					<div class="container-logo">
						
						<img src="./Imagenes/LOGO VERTICAL.png" alt="">
					</div>

					<div class="container-user">
						<i class="fa-solid fa-user"></i>
					
                      
						</div>
					</div>
				</div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						<li><a href="Inicio.html">Volver a inicio</a></li>
						
					</ul>

					
				</nav>
			</div>
		</header>
        <section class="banner">
            
        
<div class="hola">

    
<div class="container-form register">
    <div class="information">
        <div class="info-childs">
            <h2>¡BIENVENID@!</h2>
            <p>PLAYTHING WORLD, te invita a registrate.</p>
           

            <input type="button" value="Iniciar Sesion" id="sign-in">
         </div>
            </div>
           <div class="form-information">
            <div class="form-information-childs">
                <h2>Crear una cuenta</h2>
                <div class="icons">
                    <i class="fa-brands fa-google"></i>
                    <i class="fa-brands fa-facebook"></i>
                </div>
                <p>O introduce tus datos manualmente</p>
           
				<form action="" name="pw" method="post" class="form">
                   <label>
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="nombre" placeholder="Nombre completo">
</label>
<label>
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="correo" placeholder="Tu correo electronico">
						</label>
						<label>  
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="contraseña" placeholder="Tu contraseña">
						</label>
                    <input type="submit" name="registro" value="Registrarse">
					<input type="reset">
                </form>
            </div>
        </div>

</div>


<div class="container-form login hide">
    <div class="information">
        <div class="info-childs">
            <h2>¡BIENVENID@ NUEVAMENTE!</h2>
            <p>PLAYTHING WORLD, te da la bienvenida nuevamente.</p>
           
            <input type="button" value="Registrarse" id="sign-up">
        </div>
</div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Iniciar Sesion</h2>
                <div class="icons">
                    <i class="fa-brands fa-google"></i>
                    <i class="fa-brands fa-facebook"></i>
                </div>
                <p>O Iniciar sesion con una cuenta</p>
				<form action="#" name="pw" method="post" class="form">                   
                    <label>
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="correo" placeholder="Tu correo electronico" required>
                    </label>
                    <label>
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Tu contraseña"  required onclick="vista()">
                    </label>
                       <input type="submit" name="contraseña" value="Iniciar Sesion" id="sign-in">
					   <input type="reset">
    
                       
                </form>
            </div>
        </div>
</div>

</section>
</div>

<script src="script.js"></script>
        <script
        src="https://kit.fontawesome.com/81581fb069.js"
        crossorigin="anonymous"
		></script>
</body>



<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "pw";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (isset($_POST['contraseña'])) {
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    

    $insertarDatos = "INSERT INTO sesiones VALUES('', '$correo', '$contraseña')";
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
}
?>