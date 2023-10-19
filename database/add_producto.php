<?php
session_start();
$id_producto = $_POST['id_producto'];
array_push($_SESSION['carrito'], $id_producto);
