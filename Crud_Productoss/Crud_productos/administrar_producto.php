<?php

//incluye la clase Libro y CrudLibro
require_once('crud_producto.php');
require_once('Producto.php');

$producto= new CrudProducto();
$producto= new Producto();

	// si el elemento insertar no viene nulo llama al crud e inserta un producto
	if (isset($_POST['insertar'])) {
		$producto->setNombre($_POST['nombre']);
		$producto->setDescripcion($_POST['descripcion']);
		$producto->setCompra($_POST['compra']);
		$producto->setVenta($_POST['venta']);
        $producto->setColor($_POST['color']);
		
		
		
		//llama a la función insertar definida en el crud
		$producto->insertar($producto);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el producto
	}elseif(isset($_POST['actualizar'])){
		$producto->setNombre($_POST['nombre']);
		$producto->setDescripcion($_POST['inicio']);
		$producto->setCompra($_POST['Fin']);
		$producto->setVenta($_POST['catedraticos']);
		$producto->setColor($_POST['Link']);
		
		$crud->actualizar($producto);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un producto
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}


	
?>
