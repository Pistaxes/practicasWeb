Copy code
<?php
session_start();

if (isset($_SESSION['carrito']) && is_array($_SESSION['carrito'])) {
    // Obten el valor actualizado del carrito
    $valorCarrito = count($_SESSION['carrito']);

    // Devuelve el valor como respuesta
    echo $valorCarrito;
}
