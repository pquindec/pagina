
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
<body class="footer-fijo">
    <h4>Bienvenido <?php echo $user->getNombre(); ?></h4>
    <a href="includes/logout.php">Logout</a>
    <header>
        <img src="img/logo.png" alt="Logotipo">
    </header>
    <div class="barra text-center">
        <nav class="nav">
            <a href="index.php">Tienda</a>
            <a href="vistas/nosotros.php">Nosotros</a>

        </nav>
    </div>
    <div class="contenedor">
        <div class="hero">
            <img src="img/hero.jpg" alt="imagen hero">
        </div>

        <main>
            <h2>Nuestros Productos</h2>
            <ul class="lista-productos">
                <li>
                    <img src="img/1.jpg" alt="producto">
                    <p>VueJS <span class="precio">$25</span></p>
                    <a href="vistas/producto.php" class="boton">Comprar</a>
                </li>
                <li>
                    <img src="img/2.jpg" alt="producto">
                    <p>Angular <span class="precio">$25</span></p>
                    <a href="vistas/producto.php" class="boton">Comprar</a>
                </li>
                <li>
                    <img src="img/3.jpg" alt="producto">
                    <p>React <span class="precio">$25</span></p>
                    <a href="vistas/producto.php" class="boton">Comprar</a>
                </li>
                <li>
                    <img src="img/4.jpg" alt="producto">
                    <p>Redux <span class="precio">$25</span></p>
                    <a href="vistas/producto.php" class="boton">Comprar</a>
                </li>
                <li>
                    <img src="img/5.jpg" alt="producto">
                    <p>Node.js <span class="precio">$25</span></p>
                    <a href="vistas/producto.php" class="boton">Comprar</a>
                </li>
                <li>
                    <img src="img/6.jpg" alt="producto">
                    <p>SASS <span class="precio">$25</span></p>
                    <a href="vistas/producto.php" class="boton">Comprar</a>
                </li>
                <li>
                    <img src="img/7.jpg" alt="producto">
                    <p>HTML5 <span class="precio">$25</span></p>
                    <a href="vistas/producto.php" class="boton">Comprar</a>
                </li>
                <li>
                    <img src="img/8.jpg" alt="producto">
                    <p>Github <span class="precio">$25</span></p>
                    <a href="vistas/producto.php" class="boton">Comprar</a>
                </li>
                <li>
                    <img src="img/9.jpg" alt="producto">
                    <p>Bulma CSS <span class="precio">$25</span></p>
                    <a href="vistas/producto.php" class="boton">Comprar</a>
                </li>
                <li>
                    <img src="img/10.jpg" alt="producto">
                    <p>TypeScript <span class="precio">$25</span></p>
                    <a href="vistas/producto.php" class="boton">Comprar</a>
                </li>
                <li>
                    <img src="img/11.jpg" alt="producto">
                    <p>Drupal <span class="precio">$25</span></p>
                    <a href="vistas/producto.php" class="boton">Comprar</a>
                </li>
                <li>
                    <img src="img/12.jpg" alt="producto">
                    <p>JavaScript <span class="precio">$25</span></p>
                    <a href="vistas/producto.php" class="boton">Comprar</a>
                </li>
            </ul>
        </main>
    </div><!--.contenedor-->
    
    <footer class="footer">
        <p class="copyright">
            Frontend Store - Todos los Derechos Reservados 2020.
        </p>
    </footer>
</body>
</html>