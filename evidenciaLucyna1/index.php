<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - inicio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container-form login ">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido</h2>

                <p>nulla magnam ipsam. Et inventore voluptatem harum.</p>

                <input type="submit" value="Registrarse" id="registrar">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Iniciar sesión</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-github'></i>
                    <i class='bx bxl-linkedin'></i>
                </div>

                <p>o iniciar sesion con una cuenta</p>
                <form class="form" action="" name="" method="POST">
                    <label>
                        <i class='bx bxs-envelope'></i>
                        <input type="email" placeholder="Correo electronico" name="email-inicio" >
                    </label>
                    <label>
                        <i class='bx bxs-lock-alt'></i>
                        <input type="text" placeholder="Contraseña" name="contraseña-inicio">
                    </label>
    
                    <input type="submit" value="Iniciar sesión" name="sing-in" id="iniciar-sesion">
                    
                    <?php
                        include("php/conexion.php");
                        include("php/verificar.php");
                    ?>

                </form>
            </div>
        </div>


    </div>

    <div class="container-form register  hide" id="div-registro">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido</h2>

                <p>nulla magnam ipsam. Et inventore voluptatem harum.</p>

                <input type="button" value="Iniciar sesión" id="iniciar">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">

                <h2>Crear una cuenta</h2>
    
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-github'></i>
                    <i class='bx bxl-linkedin'></i>
                </div>

                <p>o usa tu e-mail para registrarte</p>
                <form class="form" action="" name="" method="POST">
                    <label>
                        <i class='bx bx-user'></i>
                        <input type="text" placeholder="Nombre de usuario" name="user">
                    </label>
                    <label>
                        <i class='bx bxs-envelope'></i>
                        <input type="email" placeholder="Correo electronico" name="correo">
                    </label>
                    <label>
                        <i class='bx bxs-lock-alt'></i>
                        <input type="text" placeholder="Contraseña" name="contraseña">
                    </label>

                    <?php
                        include("php/conexion.php");
                        include("php/registro.php");
                    ?>
                    <input type="submit" value="Registrarse" name="btnregistro" id="botonderegistro">
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>