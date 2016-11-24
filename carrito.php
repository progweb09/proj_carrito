<?php
include_once 'producto.php';
include_once 'item.php';

class Carrito{
	 private $items=array();
	
	 public function agregarCarrito($nuevoId,$nuevaCantidad,$nuevoCliente){
	 	$nuevoItem=new Item();
	 	$nuevoItem->setIdProducto($nuevoId);
	 	$nuevoItem->setCantidad($nuevaCantidad);
	 	$nuevoItem->setIdCliente($nuevoCliente);
	 	array_push($this->items,$nuevoItem);
	 }
	 
	 public function listarCompras(){
	 	return $this->items;
	 }
	 
	 public function precioTotal(){
	 	$total = 0;
	 	foreach($this->items as $item)
	 		$total += $item->subtotal($item->getIdProducto());
	 		return $total;
	 }
	 
	
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 public function finalizarCompra(){
	 	
	 }

}