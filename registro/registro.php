<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>  
    <div class="container">
        <form action="registrar.php" method="post" class="formulario">
            <div class="cabecera">
                <img src="image/destinos.png" alt="">
                <h2>REGISTRARSE</h2>
            </div>
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="name" required>
            </div>
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="campo">
                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono" name="telefono" required>
            </div>

            <div class="campo">
                <label for="contrasena">Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>

            <form action="/index.html" method="post" class="formulario">
                <div class="campo">
                    <input class="boton" type="submit" name="register" value="REGISTRARSE">
                </div>
            </form>

        </form>
    </div>


    <footer class="footer">
        <div class="footer-texto">
            <a href="/turistea/index.html" class="logo">TURISTEA</a>
            <p>Copyright © 2023 derechos reservados</p>
        </div>
        <div class="footer-redes">
            <a href="https://www.facebook.com" target="_blank">
                <img src="image/facebook.png" alt="">
            </a>
            <a href="https://www.instagram.com" target="_blank">
                <img src="image/instagram.png" alt="">
            </a>
            <a href="https://twitter.com/?lang=es" target="_blank">
                <img src="image/twitter.png" alt="">
            </a>
        </div>
    </footer>
</body>
</html>