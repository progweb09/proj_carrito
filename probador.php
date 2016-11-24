<?php
include_once 'cliente.php';
include_once 'producto.php';
include_once 'Item.php';
include_once 'carrito.php';


$nuevoCarrito=new Carrito();
$nuevoCarrito->agregarCarrito(2,50,1);
$nuevoCarrito->agregarCarrito(3,100,1);
echo $nuevoCarrito->precioTotal();










