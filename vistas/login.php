<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frontend Store</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php

    try {
        require_once('includes/conexion.php');
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
    ?>
    <header>
        <img src="img/logo.png" alt="Logotipo">
    </header>
    <div class="login-page">
        <div class="form">
            <form action="" class="register-form" method="POST">
                <input type="text" id="user" name="user" placeholder="Usuario"/>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre de usuario"/>
                <input type="password" id="password" name="password" placeholder="Contraseña"/>
                <input type="text" id="email" name="email" placeholder="Correo"/>
                <button  name="submit">Registrar</button>
                <p class="mensaje"> Inicio de sesion <a href="#">Login</a>
                </p>
            </form>
            <form class="login-form" action="" method="POST">
            <?php
                if(isset($errorLogin)){
                    echo $errorLogin;
                }
            ?>
                <input type="text"  id="usuario" name="usuario" required placeholder="Nombre de usuario"/>
                <input type="password" id="contra" name="contra" required placeholder="Contraseña"/>
                <button type="submit" name="submit">Iniciar</button>
                <p class="mensaje"> Registrarse <a href="#">Register</a>
            </form>
        </div>
    </div>
    <?php 
            if( isset($_POST['submit'])&&
            isset($_POST['user']) && !empty($_POST['user'])&&
            isset($_POST['nombre']) && !empty($_POST['nombre'])&&
            isset($_POST['password']) && !empty($_POST['password'])&&
            isset($_POST['email']) && !empty($_POST['email'])){
            $inser = "insert into inicio(usuario,nombre,contrasena,correo) values('$_POST[user]','$_POST[nombre]','$_POST[password]','$_POST[email]')";
            $query = mysqli_query($cone,$inser);
            if($query){
                echo "<h3>Ingresado Correctamente</h3>";
            }else {
                echo "<h3>Fallo al Insertar los datos</h3>";
                  }
            }   
    ?>   
    
    <?php
    $cone->close();
    ?>

    <footer class="footer">
        <p class="copyright">
            Frontend Store - Todos los Derechos Reservados 2020.
        </p>
    </footer>
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>

    <script>
        $('.mensaje a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
    </script>
</body>
</html>