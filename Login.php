<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Movie Horror Shop Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <!--Estilos-->
        <link rel="stylesheet" href="css/Login.css">
        <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script> 
    </head>
    <body>
            <!--Menu de navegacion-->
     <header id="header">
        <nav class="menu">
            <div class="logo-box">
                <h1><img src="img/Logo_3.png" width="40" height="40"> <a href="./Index.html">Movie Horror Shop</a> </h1>
                <!--<span class="btn-menu"><i class="fas fa-bars"></i></span> -->
            </div>
            <div class="list-container">
                <ul class="lists">
                    <li><a href="./Index.html" >Inicio</a></li>
                    <li><a href="./catalogo.html">Catálogo</a></li>
                    <li><a href="./Login.php" class="activo">Iniciar sesión</a></li>
                </ul>
            </div>
        </nav>
     </header>

     <!--Iniciar Sesión-->
<main>
    <div class="contenedor_todo">
        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia Sesión para ingresar</p>
                <button id="btn_iniciar-sesion">Iniciar Sesión</button>
            </div>
            <div class="caja__trasera-register">
                <h3>¿Aún no estás registrado?</h3>
                <p>Registrarse</p>
                <button id="btn_registrarse">Registrarse</button>
            </div>
        </div>
        <!--Formulario Login y Registro-->
        <div class="contenedor__login-register">
            <!--Login-->
            <form action="" class="formulario__login">
                <h2>Iniciar Sesión</h2>
                <input type="text" placeholder="Correo Electronico">
                <input type="password" placeholder="Contraseña">
                <button>Ingresar</button> 
            </form>
    
            <!--Registro-->
            <form action="php/registro_usuario_be.php" method= "POST" class="formulario-register">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                <input type="text" placeholder="Correo Electrónico" name="correo">
                <input type="text" placeholder="Usuario" name="usuario">
                <input pass="password" placeholder="Contraseña" name="contrasena">
                <button>Registrarse</button>
            </form>
        </div>
    </div>

      
        <div class="footer-text">
            <p>&copy; Movie Horro Shop - 2021| Todos los derechos reservados</p>
        </div>

        </div>
    </div>
</main>
        <script src="https://kit.fontawesome.com/ca6e14d7f4.js" crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
        <script src="js/login.js"></script>
    </body>
</html>