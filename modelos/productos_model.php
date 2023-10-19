<?php
require_once '../controladores/Autoload.php';

class Producto extends Conexion {
    private $idProduc;
    private $idCateg;
    private $nombre;
    private $descrip;
    private $precio;
    private $costo;
    private $imagen;
    private $inventario;
    private $reorden;
    private $unid_comp;
    private $talla;
    private $color;

    public function __construct() {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    /*
        public function insertProducto(int $idCateg, string $nombre, string $descrip, float $precio, float $costo, 
        string $imagen, int $inventario, int $reorden, int $unid_comp, string $talla, string $color){

        }*/

    public function getProductos() {
        $sql = "SELECT * FROM producto";
        $execute = $this->conexion->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }
    public function getProductosconid($id) {
        $sql = "SELECT * FROM producto WHERE id_producto = " . $id;
        $execute = $this->conexion->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }
}
