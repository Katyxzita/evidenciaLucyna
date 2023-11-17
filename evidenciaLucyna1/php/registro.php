<?php 

    if(!empty($_POST["btnregistro"])){

        if(empty($_POST["user"])
        or empty($_POST["correo"])
        or empty($_POST["contraseña"])) {

            echo '<div class="alerta">Uno de los campos está vacío</div>';
        }else {
            $user= $_POST["user"];
            $correo= $_POST["correo"];
            $contraseña= $_POST["contraseña"];

            $sqlRevision = $conexion->query("SELECT * FROM usuarios WHERE nombre = '$user' AND email = '$correo' AND contraseña = '$contraseña'");

            if($sqlRevision->num_rows == 1) {
                echo '<div class="alerta">Este usuario ya está registrado</div>';
            } else {

                $sql=$conexion->query("insert into usuarios (nombre,email,contraseña) values ('$user','$correo','$contraseña')");
                if($sql==1) {
                    echo '<div class="alertaVerde">Usuario registrado correctamente</div>';
                } else {
                    echo '<div class="alerta">Error al realizar el registro</div>';
                }
            }
        }
    }
?>