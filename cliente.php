<?php
class Cliente {
    private $nombre;
    private $telefono;
    private $pedidos = [];

    public function __construct($nombre, $telefono) {
        $this->nombre = $nombre;
        $this->telefono = $telefono;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function agregarPedido($pedido) {
        $this->pedidos[] = $pedido;
    }

    public function eliminarPedido($pedido) {
        foreach ($this->pedidos as $key => $pedidoActual) {
            if ($pedidoActual === $pedido) {
                unset($this->pedidos[$key]);
                break;
            }
        }
    }

    public function getPedidos() {
        return $this->pedidos;
    }
}