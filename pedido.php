<?php
class Pedido {
    private $cliente;
    private $productos = [];

    public function __construct($cliente) {
        $this->cliente = $cliente;
    }

    public function agregarProducto($producto, $cantidad) {
        $this->productos[] = ['producto' => $producto, 'cantidad' => $cantidad];
        $producto->reducirStock($cantidad);
    }

    public function getProductos() {
        $productos = [];
        foreach ($this->productos as $item) {
            $productos[] = $item['producto'];
        }
        return $productos;
    }

   
}

$cliente1 = new Cliente("Nombre Cliente 1", "Pamela");
$cliente2 = new Cliente("Nombre Cliente 2", "Florencia");

$producto1 = new Producto("Producto 1", 10.99, 50);
$producto2 = new Producto("Producto 2", 5.99, 30);

$pedido1 = new Pedido($cliente1);
$pedido1->agregarProducto($producto1, 2);
$pedido1->agregarProducto($producto2, 1);

$pedido2 = new Pedido($cliente2);
$pedido2->agregarProducto($producto1, 3);




$cliente1->agregarPedido($pedido1);
$cliente2->agregarPedido($pedido2);
$cliente1->eliminarPedido($pedido1);