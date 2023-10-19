<?php

require_once '../Modelos/conexion.php';
require_once '../Modelos/productos_model.php';
require_once '../controladores/Autoload.php';

$objProducto = new Producto();
session_start();
$total = 0;
$carrito = $_SESSION['carrito'];


        $productosUnicos = array();

        foreach ($carrito as $product) {
          if (!isset($productosUnicos[$product])) {
            $productosUnicos[$product] = 1;
          } else {
            $productosUnicos[$product]++;
          }
        }

        foreach ($productosUnicos as $productID => $cantidad) {
          $detalleProducto = $objProducto->getProductosconid($productID);

          if ($detalleProducto) {
            $total += $detalleProducto[0]['precio'] * $cantidad;
          }
        }
echo $total; 
?>
