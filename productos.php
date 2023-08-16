<?php
class Producto {
    private $nombre;
    private $precio;
    private $stock;

    public function __construct($nombre, $precio, $stock) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getStock() {
        return $this->stock;
    }

    public function reducirStock($cantidad) {
        $this->stock -= $cantidad;
    }
   
    
   
}