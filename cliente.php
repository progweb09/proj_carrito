<?php
class Cliente{
	private $idCliente;
	private $nombre;


    /**
     * idCliente
     * @return unkown
     */
    public function getIdCliente(){
        return $this->idCliente;
    }

    /**
     * idCliente
     * @param unkown $idCliente
     * @return Cliente{
     */
    public function setIdCliente($idCliente){
        $this->idCliente = $idCliente;
        return $this;
    }

    /**
     * nombre
     * @return unkown
     */
    public function getNombre(){
        return $this->nombre;
    }

    /**
     * nombre
     * @param unkown $nombre
     * @return Cliente{
     */
    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }

}