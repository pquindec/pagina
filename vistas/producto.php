<?php
include_once '../includes/user.php';
include_once '../includes/user_session.php';
include_once 'carrito.php';
$usuario = $_SESSION['user'];

$a=0;

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
    <script language="javascript">alert("Ingrese los datos para realizar compra");</script>
    <h4>Bienvenido <?php echo $usuario ?> </h4>
    
    </div>
    <a href="../includes/logout.php">Logout</a>
    <a href="datos.php">Datos</a>
    <header>
        <img src="../img/logo.png" alt="Logotipo">
    </header>
    <div class="barra">
        <nav class="nav">
            <a href="../index.php">Tienda</a>
            <a href="../vistas/nosotros.php">Nosotros</a>
        </nav>
    </div>
    <div class="container">
    <br>
    <div class="alert alert-success">   
         <?php echo $mensaje ?>
         
        <a class="carrito badge badge-success" href="../vistas/vercarrito.php">Carrito</a>
    </div>
    </div>
    <main class="contededor">
        <h2>Camisa de muestra</h2>
        <div class="contenedor-informacion">
            <img src="../img/3.jpg" alt="Imagen Producto">
            <div class="contenido">
                <p>Sabemos que tu imagen de marca es importante, por ello nos tomamos con mucha 
                    seriedad la calidad de nuestras camisetas personalizadas y publicitarias. 
                    Te garantizamos que no tendrás problemas con cualquiera de las que elijas.
                </p>
                <form action="" method="post" class="formulario-pedido">
                    <select class="talla campo" name="talla" id="talla">
                        <option value="chica">Chica</option>
                        <option value="mediana">Mediana</option>
                        <option value="grande">Grande</option>
                    </select>
                    <input type="number" min="1" name="cantidad" id="cantidad" class="cantidad campo">
                    <input name="btnAccion" type="submit" class="boton" value="Agregar">
                </form>
            </div>
          
        </div>

    </main>

    <footer class="footer">
        <p class="copyright">
            Frontend Store - Todos los Derechos Reservados 2020.
        </p>
    </footer>
</body>
</html>
<?php } ?>