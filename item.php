<?php
include_once 'producto.php';
include_once 'cliente.php';
class Item{
	private $idProducto;
	private $idCliente;
	private $cantidad;

	public function getIdProducto()
	{
		return $this->idProducto;
	}
	
	public function setIdProducto($nuevoId)
	{
		$this->idProducto=$nuevoId;
	}
	
	
	
	public function getCantidad()
	{
		return $this->cantidad;
	}
	
	public function setCantidad($nuevoCantidad)
	{
		$this->cantidad=$nuevoCantidad;
	}
	
	public function getIdCliente()
	{
		return $this->idCliente;
	}
	
	public function setIdCliente($nuevoId)
	{
		$this->idCliente=$nuevoId;
	}
	
	public function getProducto($nuevoId){
		$nuevoProducto=new Producto($nuevoId);
		return $nuevoProducto;
	}
	
	
		
	
	public function subTotal($idProducto){
				$total = 0;
				$total = $this->getCantidad()*$this->getProducto($idProducto)->getPrecio();
				return $total;
		
	}
	
	
	
}
