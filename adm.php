<?php
$cliente1 = new Cliente("Nombre Cliente 1", "iiii");
$cliente2 = new Cliente("Nombre Cliente 2", "ooooo");

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


echo "Cliente 1: " . $cliente1->getNombre() . PHP_EOL;
foreach ($cliente1->getPedidos() as $pedido) {
    echo " - Pedido con " . count($pedido->getProductos()) . " productos" . PHP_EOL;
}

echo "Cliente 2: " . $cliente2->getNombre() . PHP_EOL;
foreach ($cliente2->getPedidos() as $pedido) {
    echo " - Pedido con " . count($pedido->getProductos()) . " productos" . PHP_EOL;
}

echo "Productos:" . PHP_EOL;
echo " - " . $producto1->getNombre() . ", Stock: " . $producto1->getStock() . PHP_EOL;
echo " - " . $producto2->getNombre() . ", Stock: " . $producto2->getStock() . PHP_EOL;

echo "Menú:\n";
    echo "1. Agregar Cliente\n";
    echo "2. Agregar Producto\n";
    echo "3. Realizar Pedido\n";
    echo "4. Mostrar Información\n";
    echo "5. Salir\n";
    echo "Selecciona una opción: ";
    return readline();
