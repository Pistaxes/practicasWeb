<?php
require_once '../Modelos/conexion.php';
require_once '../Modelos/productos_model.php';
require_once '../controladores/Autoload.php';

$objProducto = new Producto();

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>X Fit</title>
  <link rel="stylesheet" href="../assets/css/styles.css" />
  <style></style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <?php
  session_start();

  ?>
</head>

<body>
  <header>
    <nav class="navbar">
      <div class="navegacion">
        <a class="navbar-brand" href="../index.html">
          <img class="nav-logo" src="../assets/imagenes/Logo completo (letras blancas).png" alt="" />
        </a>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.html">Inicio <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../vistas/login.html">Visitas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../vistas/tienda.php">Tienda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../vistas/checkout.php">Checkout</a>
          </li>
          <div class="form-nav nav-item">
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2 nav-item" type="search" aria-label="Search" />
              <button class="btn-nav" type="submit">Search</button>
            </form>
          </div>
        </ul>
      </div>
    </nav>
  </header>

  <!--Seccion productos-->
  <div class="container">
    <div class="row">

      <?php
      $products = $objProducto->getProductos();
      if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
      }

      foreach ($products as $product) {
        echo '
      <div class="col">
        <img title="Titulo producto" alt="Titulo" class="card-img-top" src="../assets/imagenes/imagen(' . $product['id_producto']  . ').jpeg" />
        <div class="card-body">
          <span>' . $product['nombre'] . '</span>
          <h5 class="card-tittle">$' . $product['precio'] . '</h5>
          <p class="card-text">
            ' . $product['descripcion'] . '
          </p>
          <button class="btn btn-primary addCarrito" name="btnAccion" value="' . $product['id_producto'] . '" type="submit">
            Agregar al carrito
          </button>
          </div>
      </div>
      ';
      }
      ?>

    </div>
  </div>
  <script>
    $(document).ready(function() {
      var botones = document.querySelectorAll('.addCarrito');

      for (var i = 0; i < botones.length; i++) {
        botones[i].addEventListener('click', function() {
          var id_producto = this.value;
          $.ajax({
            url: "../database/add_producto.php",
            method: "POST",
            data: {
              id_producto: id_producto
            },
            success: function() {
              $.ajax({
                url: "../database/get_cantidad_carrito.php", // URL para obtener el valor del carrito
                method: "GET",
                success: function(data) {
                  // Actualiza el contenido del div con el nuevo valor
                  $("#carritoCount").html(data);
                  console.log("Se ingresó");
                }
              });
            }

          });
        });
      }
    });
  </script>
  <div id="carritoCount"><?php echo count($_SESSION['carrito']); ?></div>

  <footer class="pie-pagina">
    <div class="grupo-1">
      <div class="box">
        <figure>
          <a href="#"> <img src="../assets/imagenes/Logo.png" alt= /> </a>
        </figure>
      </div>
      <div class="box">
        <h2>
          <img src="../assets/imagenes/letras blancas.png" class="logo-texto" alt="" />
        </h2>
        <div class="box-link">
          <li>
            <a class="footer-item" href="./vistas/aboutUs.html">Sobre nosotros</a>
          </li>
          <li>
            <a class="footer-item" href="/vistas/planes.html">Planes</a>
          </li>
          <li>
            <a class="footer-item" href="#">Visitas</a>
          </li>
        </div>
      </div>
      <div class="box">
        <h2>SIGUENOS</h2>
        <div class="red-social">
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-instagram"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-youtube"></a>
        </div>
      </div>
    </div>
    <div class="grupo-2">
      <small>&copy; 2021 <b>X FIT</b> - Todos los Derechos Reservados.</small>
    </div>
  </footer>
</body>

</html>