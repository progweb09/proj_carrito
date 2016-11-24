<?php
class Producto{
	private $idProducto;
	private $descripcion;
	private $precio;

	public function __construct($id) {
		switch($id){
		
			case 1: $this->idProducto=1;
			$this->descripcion='producto1';
			$this->precio=20;
			break;
			case 2: $this->idProducto=2;
			$this->descripcion='producto2';
			$this->precio=30;
			break;
			case 3: $this->idProducto=3;
			$this->descripcion='producto3';
			$this->precio=40;
			break;
		}
		

	}

	public function getIdProducto()
	{
		return $this->idProducto;
	}

	public function setIdProducto($nuevoId)
	{
		$this->idProducto=$nuevoId;
	}

	public function getDescripcion()
	{
		return $this->descripcion;
	}

	public function setDescripcion($nuevoDescripcion)
	{
		$this->descripcion=$nuevoDescripcion;
	}

	public function getPrecio()
	{
		return $this->precio;
	}

	public function setPrecio($nuevoPrecio)
	{
		$this->precio=$nuevoPrecio;
	}


}