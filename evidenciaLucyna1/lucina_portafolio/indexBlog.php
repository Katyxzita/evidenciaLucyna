<?php 
    session_start();

    if(!isset($_SESSION["email-inicio"])) {
        header("Location: indexBlog.php");

        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">



        <title> Katyxzita's site </title>
        <link href="preload" href="css/normalize.css" as="style">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        

        <link href="preload" href="css/style.css" as="style">
        <link href="css/style.css" rel="stylesheet"> 
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        
    </head>

    <body> 

        <header>
            <div class="nav-fondo">
                <nav class="navegacion-principal">
                    <h1 class="titulo"> Yessica <span>Katyxzita</span></h1>
                    <a href="#inicio"> Inicio</a>
                    <a href="#acerca_de" > Acerca de</a>
                    <a href="#portafolio" > Portafolio</a>
                    <a href="#contacto" > Contacto</a>
                    <form method="post" action="cerrar_sesion.php">
                        <input type="submit" name="log-out" class="cerrar-sesion" value="Cerrar sesión">
                    </form>
                </nav>
            </div>
        </header>

        <section class="seccion1" id="inicio"> 
            <div class="contenido-seccion1">
                <h2> Yessica siempre vive en la nubes
                </h2>
                <div class="ubi">
                    <p>Y eso la hace feliz.</p>
                </div> <!-- Div UBI -->
                <a class="boton" href="#acerca_de">Acerca de Yessica</a>
                <div class="redes-sociales">
                    <a target="_blank" href="https://www.facebook.com/J.wssicagg">
                        <i class='bx bxl-facebook-circle'></i>
                    </a>

                    <a target="_blank" href="https://www.instagram.com/katyxzita/">
                        <i class='bx bxl-instagram-alt' ></i>
                    </a>

                    <a target="_blank" href="https://www.tiktok.com/@katyxzita">
                        <i class='bx bxl-tiktok' ></i>
                    </a>
                </div>
            </div> 
        </section>
        
        

        <div class="seccion" id="acerca_de"> 
            <h2>El blog de Katyxzita</h2>
            <div class="">
                <section class="seccion2-contenido"> 
                        <h3>Katyxzita</h3>
                            <div class="imagen-yessica">
                                <img src="img/yessicahermosa.jpg" alt="">
                            </div>
                        <p>Yessica es simplemente genial. ¡Toda una artista!</p>
                        <a class="boton" href="#+info">+ Info</a>
                </section>
            </div>
        </div>

        <h2 class="titulo encuadre">Más información</h2>

        <div class="seccionInfo" id="+info"> 
            <h2>información sobre KatyXzita</h2>
            <div class="informacion">
                <section class="seccion2-contenido"> 
                        <h3>Katyxzita</h3>
                            <div class="imagen-perry">
                                <img src="img/katy_perry.webp" alt="">
                            </div>
                        <p>Yessica ama a Katy Perry con locura</p>
                    
                </section>

                <section class="seccion2-contenido"> 
                    <h1>Curiosidades de Yessica</h1>

                    <ul>
                        <li>Ama a Katy Perry</li>
                        <li>Dibuja</li>
                        <li>pinta</li>
                        <li>cose</li>
                        <li>borda</li>
                        <li>juega videojuegos</li>
                        <li>Le gusta la programación</li>
                        <li>es jefa de grupo</li>
                        <li>su color favorito es el negro</li>
                        <li>su rama favorita de la programacion es frontEnd</li>
                        <li>su segunda artista favorita es Mon Laferte</li>
                        <li>su primer amor le puso los cuernos</li>
                        <li>ama los minions</li>
                        <li>aspira a ser maestra de programación</li>
                        <li>quiere aproximadamente 7 hijos (quizas no los tendrá, es muy desafortunada en el amor)</li>
                        <li>de pequela bebió veneno de rata</li>
                        <li>su papá le solia llamar "chiny cochini"</li>
                        <li>actualmente tiene 20 años</li>
                        <li>es streamer</li>
                        <li>su juego favorito es valorant (main sage)</li>
                    </ul>
                
            </section>
            </div>
        </div>
        
        <div class="encuadre" > 
            <h2 class="titulo"><i class='bx bxs-file-pdf'></i>Tarjetas del portafolio<i class='bx bxs-file-pdf'></i></h2>
            <div class="divserv">
                <div class="services seccion-tarjetas" id="portafolio"> 
                        <h3>ArtSay</h3>
                        <i class='bx bxs-palette'></i>
                        <p>
                            ArtSay es una plataforma que trata sobre la compra y venta de artesanias,
                        </p>

                        <a class="boton" href="pdfs/ArtSay.pdf" download="ArtSay.pdf">Descargar</a>
                </div>

                <div class="services seccion-tarjetas">   
                    <h3>Sitio #1 de Katy</h3>
                        <i class='bx bxs-home-heart'></i>
                        <p> El primer sitio web que Katy creo en el mundo, es muy similar a este, igual de bello. </p> 

                        <a class="boton" href="pdfs/KatyXzita'site.pdf" download="KatyXzita'site.pdf">Descargar</a>
                </div>

                    <div class="services seccion-tarjetas">
                        <h3>Coffe store</h3>
                            <i class='bx bx-coffee-togo'></i>
        
                            <p>Un tienda de cadé que hizo katy para salir de la pobreza. </p>  
                            <a class="boton" href="pdfs/Coffe Store.pdf" download="Coffe Store.pdf">Descargar</a>
                    
                </div>    

                <div class="services seccion-tarjetas">
                    <h3>Tienda de Katy</h3>
                    <i class='bx bxs-store-alt'></i>    
        
                        <p>Una tienda mas de collares que terminó en bancarota. </p>  
                        <a class="boton" href="pdfs/Katy's Store.pdf" download="Katy's Store.pdf">Descargar </a>
            </div>    
            </div>
        </div>
        

        <h2 class="titulo encuadre">Contacto</h2>
        <div class="encuadre contacto" id="contacto">
            <div class="formulario">
            <form class="form"
            action="https://formsubmit.co/yessi_004@outlook.com" method="POST" target="_blank">
                            <h1>Contáctame llenando los campos</h1>
                            <div class="campoform">
                                <div class="campo">
                                    <label>Nombre: </label>
                                    <input class="input" type="text" placeholder="Ingresa tu nombre"/>
                                </div>

                                <div class="campo">
                                    <label>Teléfono: </laber>
                                    <input class="input" type="number" placeholder="Ingresa tu numero de TLF"/>
                                </div>

                                <div class="campo">
                                    <label>Correo: </label>
                                    <input class="input"type="email" placeholder="Ingresa tu Email"/>
                                </div>

                                <div class="campo">
                                    <label>Mensaje: </label>
                                    <textarea class="input" >  </textarea> 
                                </div>

                            </div>

                            <div class="enviar">
                                <input class="boton" type="submit" value="Enviar">
                            </div>
                        </div>

                <div class="maps">
                    <h2>Ubicación</h1>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8594.648370309467!2d-108.06325096693591!3d25.081390622668938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86bb62a3d1e4d1d9%3A0x63ce21609109bb89!2s81680%20La%20Reforma%2C%20Sin.!5e0!3m2!1ses-419!2smx!4v1700064627754!5m2!1ses-419!2smx" 
                        width="520" height="340" style="border:0;" 
            
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
        </div>
    

        <footer class="footer">
            <p>© Copyright 2023, Yessica López </p>

            <a target="_blank" href="https://www.facebook.com/J.wssicagg">
                        <i class='bx bxl-facebook-circle'></i>
                    </a>

                    <a target="_blank" href="https://www.instagram.com/katyxzita/">
                        <i class='bx bxl-instagram-alt' ></i>
                    </a>

                    <a target="_blank" href="https://www.tiktok.com/@katyxzita">
                        <i class='bx bxl-tiktok' ></i>
            </a>
        </footer>
    </body>
</html>