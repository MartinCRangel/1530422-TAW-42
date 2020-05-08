<?php
require_once('crud_producto.php');
require_once('Producto.php');
$crud=new CrudProducto();
$producto= new Producto();
//obtiene todos los productos con el método mostrar de la clase crud
$listaProductos=$crud->mostrar();
?>
 
<html>
<head>
	<title>Mostrar Productos</title>
</head>
<body>
	<table border=4>
		<head>
			<td>Nombre</td>
			<td>Descripcion</td>
			<td>Precio Venta</td>
			<td>Precio Compra</td>
			<td>Color</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaProductos as $productos) {?>
			<tr>
				<td><?php echo $curso->getNombre() ?></td>
				<td><?php echo $curso->getDescripcion() ?></td>
				<td><?php echo $curso->getCompra() ?></td>
				<td><?php echo $curso->getVenta() ?></td>
				<td><?php echo $curso->getColor() ?></td>
				<td><a href="actualizar.php?id=<?php echo $curso->getNombre()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_producto.php?id=<?php echo $curso->getNombre()?>&accion=e">Eliminar</a>   </td>
				<td>
			</tr>
			<?php }?>
		</body>
	</table>

	<table border=1>
	<tr>
	<td><a href="Agregar.php">Agregar Otro</a></td>
    </tr>
    </table>
    <table border=1>
    <tr>
	<td><a href="index.php">Volver</a></td>
    </tr>
</table>
</body>
</html>