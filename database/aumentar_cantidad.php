<?php
session_start();

if (isset($_POST['productID'])) {
    $productID = $_POST['productID'];
    $carrito = $_SESSION['carrito'];

    // Aumenta la cantidad del producto en el carrito
    if (in_array($productID, $carrito)) {
        array_push($carrito, $productID);
        $_SESSION['carrito'] = $carrito;
    }

    echo "Cantidad aumentada con éxito"; // Puedes enviar una respuesta de éxito
} else {
    echo "Error: Falta el ID del producto";
}
?>
