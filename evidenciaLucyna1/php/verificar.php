<?php 
include("conexion.php");

$pagina = "lucina_portafolio/indexBlog.php";
session_start();

    if(!empty($_POST["sing-in"])){

        if(empty($_POST["email-inicio"])
        or empty($_POST["contraseña-inicio"])) {

            echo '<div class="alerta">Uno de los campos está vacío</div>';

        }else {
            $correo= $_POST["email-inicio"];
            $contraseña= $_POST["contraseña-inicio"];

            $sql=$conexion->query("SELECT * FROM usuarios WHERE email = '$correo' AND contraseña = '$contraseña'" );
            
            if($sql->num_rows == 1) {
                
                session_start();
                $_SESSION["email-inicio"] = $correo;
                header("Location: $pagina"); 
            } else {
                echo '<div class="alerta">El usuario no existe</div>';
            }
        }
    }

    

?>