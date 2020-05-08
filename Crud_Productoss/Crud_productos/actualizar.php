<?php
//incluye la clase producto
	require_once('crud_producto.php');
	require_once('Producto.php');
	$producto= new CrudProducto();
	$Producto=new Producto();
	//busca el curso utilizando el id, que es enviado por GET desde la vista mostrar.php
	$curso=$crud->obtenerCurso($_GET['id']);
?>
<html>
<head>
	<title>Actualizar Producto</title>
</head>
<header>
<h2>Actualizar Producto</h2>
</header>
<body>
	<form action='administrar_producto.php' method='post' enctype="multipart/form-data">
	<table>
		<tr>
			
			<td>Nombre:</td>
			<td> <input type='text' name='nombre' value='<?php echo $curso->getNombre()?>'></td>
		</tr>
		<tr>
			<td>Descripcion:</td>
			<td><input type='text' name='inicio' value='<?php echo $curso->getDescripcion()?>' ></td>
		</tr>
		<tr>
			<td>Precio Compra:</td>
			<td><input type='number' name=compra value='<?php echo $curso->getCompra() ?>'></td>
		</tr>
		<tr>
			<td>Precio Venta :</td>
			<td><input type='number' name='venta' value='<?php echo $curso->getVenta() ?>'></td>
		</tr>
		<tr>
			<td>Precio Color :</td>
			<td><input type='color' name='color' value='<?php echo $curso->getColor() ?>'></td>
		</tr>
		
		<input type='hidden' name='actualizar' value='actualizar'>
	</table>
	<input type='submit' value='Actualizar'>
	<a href="index.php">Volver</a>
</form>
</body>
</html>