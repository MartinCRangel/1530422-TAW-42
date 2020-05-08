<?php
// incluye la clase Db
require_once('conexion.php');

	class CrudProducto{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo producto
		public function insertar($Producto){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO productos (Nombre, Descripcion, Compra, Venta, Color) values(:Nombre,:Descripcion,:Compra,:Venta,:Color)');
			$insert->bindValue('nombre',$Producto->getNombre());
			$insert->bindValue('Descripcion',$Producto->getDescripcion());
			$insert->bindValue('Compra',$Producto->getCompra());
			$insert->bindValue('Venta',$Producto->getVenta());
			$insert->bindValue('Color',$Producto->getColor());
			
			

			$insert->execute();

		}

		// método para mostrar todos los productos
		public function mostrar(){
			$db=Db::conectar();
			$listaProductos=[];
			$select=$db->query('SELECT * FROM productos');

			foreach($select->fetchAll() as $producto){
				$myProducto= new Producto();
				$myProducto->setNombre($producto['Nombre']);
				$myProducto->setDescripcion($producto['Descripcion']);
				$myProducto->setCompra($producto['Compra']);
				$myProducto->setVenta($producto['Venta']);
				$myProducto->setColor($producto['urlColor']);
				$listaProductos[]=$myProducto;
			}
			return $listaProductos;
		}

		// método para eliminar un producto, recibe como parámetro el nombre del producto
		public function eliminar($nombre){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM productos WHERE nombreProducto=:nombre');
			$eliminar->bindValue('nombre',$nombre);
			$eliminar->execute();
		}

		// método para buscar un curso, recibe como parámetro el nombre del curso
		public function obtenerProductos($nombre){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM productos WHERE nombreProductos=:nombre');
			$select->bindValue('nombre',$nombre);
			$select->execute();
			$producto=$select->fetch();
			$myProducto= new Producto();
			$myProducto->setNombre($producto['nombreProducto']);
			$myProducto->setDescripcion(substr($producto['Descripcion'], 0, 10));
			$myProducto->setCompra(substr($producto['Compra'], 0, 10));
			$myProducto->setVenta($producto['Venta']);
			$myProducto->setColor($producto['Color']);
			
			
			
			return $myProducto;
		}

		// método para actualizar un producto, recibe como parámetro el producto
		public function actualizar($Producto){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE productos SET Nombre=:Nombre, Descripcion=:Descripcion, Compra=:Compra, Venta = :Venta, Color = :Color WHERE nombreProducto=:nombreProducto');
			
			$actualizar->bindValue('Nombre',$Producto->getNombre());
			$actualizar->bindValue('Descripcion',$Producto->getDescripcion());
			$actualizar->bindValue('Compra',$Producto->getCompra());
			$actualizar->bindValue('Venta',$Producto->getVenta());
			$actualizar->bindValue('Color',$Producto->getcolor());
			$actualizar->execute();
		}
	}
?>
