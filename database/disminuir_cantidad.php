<?php
session_start();

if (isset($_POST['productID'])) {
    $productID = $_POST['productID'];
    $carrito = $_SESSION['carrito'];

    // Disminuye la cantidad del producto en el carrito
    $key = array_search($productID, $carrito);
    if ($key !== false) {
        unset($carrito[$key]);
        $_SESSION['carrito'] = array_values($carrito);
    }

    echo "Cantidad disminuida con éxito"; // Puedes enviar una respuesta de éxito
} else {
    echo "Error: Falta el ID del producto";
}
?>
