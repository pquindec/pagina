<?php
include_once '../includes/user.php';
include_once '../includes/user_session.php';
include_once 'carrito.php';
$usuario = $_SESSION['user'];
if(isset($_SESSION['user'])) { ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Frontend Store</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/normalize.css">
    </head>
    <body>
        <h4>Bienvenido <?php echo $usuario ?></h4>
            <a href="../includes/logout.php">Logout</a>
            <header>
                <img src="../img/logo.png" alt="Logotipo">
            </header>
            <div class="barra">
                <nav class="nav">
                    <a href="../index.php">Tienda</a>
                    <a href="nosotros.php">Nosotros</a>
                    <a href="producto.php">Producto</a>
                </nav>
            </div>
        <?php 
            
        if ($_POST) {
            $total=0;
            $sid=session_id();
            $fecha=getdate();
            
             foreach ($_SESSION['CARRITO'] as $indice => $producto) {
                $total=$total+($producto['Cantidad']*25);
             }
             include_once('../includes/conexion.php');
             $inser="INSERT INTO `ventas` (`id`, `clave`, `fecha`, `correo`, `total`, `estado`) VALUES (NULL, '$sid', NOW(), '$_POST[email]', '$total', 'pendiente')";
             $query = mysqli_query($cone,$inser);
             if($query){
             }else{
                echo "<h3>Fallo al Insertar los datos</h3>";
             }
            $use = "SELECT id_usuario FROM `inicio` WHERE usuario='$usuario'";
            $resul=mysqli_query($cone,$use);
            $u=mysqli_fetch_assoc($resul);
            $sa=$u['id_usuario'];
            $idventa = "SELECT id FROM `ventas` ORDER BY FECHA DESC limit 1";
            $res=mysqli_query($cone,$idventa);
            $v=mysqli_fetch_assoc($res);
            $s=$v['id'];
             foreach ($_SESSION['CARRITO'] as $indice => $producto) {
            $sql= "INSERT INTO `detalle_venta` (`id`, `idventa`, `id_persona`, `cantidad`, `tallas`) VALUES (NULL, '$s', '$sa', '$producto[Cantidad]', '$producto[Talla]')";
            $quer = mysqli_query($cone,$sql);
            if($quer){
            }else{
               echo "<h3>Fallo al Insertar los datos</h3>";
            }
            }?> 
            <div class="jumbotron text-center pago">
                <h1 class="display-4 ">Realice el Pago</h1>
                <h4>El pago total es: <?php echo $total ?></h4>
                <p class="pago">Realice el pago por transferencia cuenta: 252525
                    <Strong>Banco Pacifico</Strong>
                    <strong>Gracias por su compra</strong>
                </p>
            </div>

        <?php } ?>   
            
    <footer class="footer">
        <p class="copyright">
            Frontend Store - Todos los Derechos Reservados 2020.
        </p>
    </footer>
</body>
</html>
<?php } ?>