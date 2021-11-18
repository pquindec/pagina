<?php
include_once '../includes/user.php';
include_once '../includes/user_session.php';
include_once 'carrito.php';
$usuario = $_SESSION['user'];

if(isset($_SESSION['user'])) {?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frontend Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body>
   
    <h4>Bienvenido <?php echo $usuario ?> </h4>
    
    <a href="../includes/logout.php">Logout</a>
    <header>
        <img src="../img/logo.png" alt="Logotipo">
    </header>
    <div class="barra">
        <nav class="nav">
            <a href="../index.php">Tienda</a>
            <a href="../vistas/nosotros.php">Nosotros</a>
            <a href="producto.php">Producto</a>
        </nav>
    </div>
    <?php 
        include_once('../includes/conexion.php');
        $sql="select * from inicio where usuario='$usuario';";
        $query=mysqli_query($cone,$sql);
        while($row=mysqli_fetch_assoc($query)){
            if($usuario=$row['usuario']){
                $nombre=$row['nombre'];
                $id=$row['id_usuario'];
            }

        }

    ?>

    <form class="container" action="" method="post">
        <input type="text" class="form-control-lg mb-2" id="cedula" name="cedula" placeholder="Cedula"/><br/>
        <input type="text" class="form-control-lg mb-2 "id="<?php $nombre ?>" name="<?php $nombre ?>" placeholder="<?php echo $nombre ?>"/><br/>
        <input type="text" class="form-control-lg mb-2" id="apellido" name="apellido" placeholder="Apellido"/><br/>
        <input type="text" class="form-control-lg mb-2" id="telefono" name="telefono" placeholder="Telefono"/><br/>
        <input type="text" class="form-control-lg mb-2" id="cuenta" name="cuenta" placeholder="cuenta"/><br/>
        <input type="text" class="form-control-lg mb-2 "id="id" name="id" placeholder="<?php echo $id ?>"/><br/>
        <button class="btn-dark" name="submit">Guardar</button>

    </form>

    <?php
        include_once('../includes/conexion.php');
        $sql="select * from persona where id='$id';";
        $resul=mysqli_query($cone,$sql);
        while($row=mysqli_fetch_assoc($resul)){
            if($id=$row['id']){
            echo"El usuario ya existe";
            }
        }
        if( isset($_POST['submit'])&&
        isset($_POST['cedula']) && !empty($_POST['cedula'])&&
        isset($_POST['apellido']) && !empty($_POST['apellido'])&&
        isset($_POST['telefono']) && !empty($_POST['telefono'])&&
        isset($_POST['cuenta']) && !empty($_POST['cuenta'])&&
        isset($_POST['id']) && !empty($_POST['id'])){
        $inser = "insert into persona(cedula,apellido,telefono,cuenta,id) values('$_POST[cedula]','$_POST[apellido]','$_POST[telefono]','$_POST[cuenta]','$_POST[id]');";
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
</body>
</html>
<?php } ?>