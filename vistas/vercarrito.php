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
       <?php if(!empty($_SESSION['CARRITO'])) { ?>

        <table class="mt-5 text-white table table-ligth table-bordered">
            <thead class="thead-dark ">
                <tr class="text-center">
                    <th width="40%">Talla</th>
                    <th width="15%">Cantidad</th>
                    <th width="20%">Precio</th>
                    <th width="20%">Usuario</th>
                    <th width="5%">--</th>
                </tr>
                </thead>
            <tbody>
                <?php
                $total=0;
                foreach ($_SESSION['CARRITO'] as $indice=>$producto) {?>
                <tr>
                    <td width="40%" class="text-center" ><?php echo $producto['Talla'] ?></td>
                    <td width="15%" class="text-center"><?php echo $producto['Cantidad'] ?></td>
                    <td width="20%" class="text-center"><?php echo $producto['Precio'] ?></td>
                    <td width="20%" class="text-center"><?php echo $producto['Usuario'] ?></td>
                    <td width="5%">
                    
                    <form action="" method="post">
                        <input type="hidden" name="id" value=" <?php echo$indice?>">
                        <button class=" btn btn-danger " type="submit"
                        name="btnAccion"
                        value="Eliminar">
                        
                        Eliminar</button> </td>
                    </form>
                </tr>
                <?php $total=$total+ $producto['Precio']; } ?>
                <tr>
                    <td colspan="2" align="right"><h3>Total</h3></td>
                    <td align="right"><h3><?php echo $total ?></h3></td>
                </tr>

                <tr>
                    <td colspan="5">
                        <form action="pagar.php" method="post">
                            <div class="alert alert-success">
                                <div class="form-group">
                                    <label for="my-input">Correo de Contacto:</label>
                                    <input type="email" id="email" name="email" placeholder="Ingrese su correo" required class="form-control">
                                </div>
                            </div>
                            <button class="btn btn-dark btn-lg btn-block" value="proceder" name="btnAccion" type="submit">Proceder con el pago</button>
                        </form>
                    </td>
                </tr>
        </tbody>
        </table>
        
       
        
        <?php } else{ ?>


        <div class="mt-5 alert alert-danger">
            No hay productos en el carrito
        </div> <?php } ?>
    <footer class="footer">
        <p class="copyright">
            Frontend Store - Todos los Derechos Reservados 2020.
        </p>
    </footer>
</body>
</html>
<?php } ?>

