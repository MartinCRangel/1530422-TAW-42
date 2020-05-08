<?php
	class Producto{
		private $id;
		private $Nombre;
		private $Descripcion;
		private $Compra;
		private $Venta;
		private $Color;
	

		function __construct(){}

		public function getNombre(){
		return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getDescripcion($descripcion){
			return $this->descripcion;
		}

		public function setDescripcion($descripcion){
			$this->inicio = $descripcion;
		}
		public function getCompra($compra){
			return $this->compra;
		}
        public function setVenta($venta){
        	$this->fin = $venta;
        } 
        public function getVenta(){
        	return $this->venta;
        }
		public function setColor($color){
			 $this->link = $color;
		}
		public function getColor(){
			return $this->color;
		}

	}
?>
