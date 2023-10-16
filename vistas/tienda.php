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
  </head>

  <body>
    <header>
      <nav class="navbar">
        <div class="navegacion">
          <a class="navbar-brand" href="../index.html">
            <img
              class="nav-logo"
              src="../assets/imagenes/Logo completo (letras blancas).png"
              alt=""
            />
          </a>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../index.html"
                >Inicio <span class="sr-only"></span
              ></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../vistas/login.html">Visitas</a>
            </li>
            <div class="form-nav nav-item">
              <form class="form-inline my-2 my-lg-0">
                <input
                  class="form-control mr-sm-2 nav-item"
                  type="search"
                  aria-label="Search"
                />
                <button class="btn-nav" type="submit">Search</button>
              </form>
            </div>
          </ul>
        </div>
      </nav>
    </header>

    <!--Seccion productos-->
    <div class="row">

      <?php
      $products = $objProducto->getProductos();
      print_r($products);
      ?>

      <div class="col-3">
        <img
          title="Titulo producto"
          alt="Titulo"
          class="card-img-top"
          src="../assets/imagenes/imagen(1).jpeg"
        />
        <div class="card-body">
          <span>Proteína ON GS 100% Whey Doble Chocolate (Bolsa 10 LB)</span>
          <h5 class="card-tittle">$650.00</h5>
          <p class="card-text">
            Concentrado de Proteína en Polvo sabor a Doble Chocolate
          </p>
          <button
            class="btn btn-primary"
            name="btnAccion"
            value="agregar"
            type="submit"
          >
            Agregar al carrito
          </button>
        </div>
      </div>
    </div>

    <footer class="pie-pagina">
      <div class="grupo-1">
        <div class="box">
          <figure>
            <a href="#"> <img src="../assets/imagenes/Logo.png" alt= /> </a>
          </figure>
        </div>
        <div class="box">
          <h2>
            <img
              src="../assets/imagenes/letras blancas.png"
              class="logo-texto"
              alt=""
            />
          </h2>
          <div class="box-link">
            <li>
              <a class="footer-item" href="./vistas/aboutUs.html"
                >Sobre nosotros</a
              >
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
