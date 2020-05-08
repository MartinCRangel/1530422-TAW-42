<html>
<head>
	<title> Agregar Producto</title>
</head>
<header>
<h3>Ingresa los datos del Producto</h3>
</header>
<form action='administrar_producto.php' method='post' enctype="multipart/form-data">
	<table>
		<tr>
			<td>Nombre:</td>
			<td> <input type='text' name='nombre'></td>
		</tr>
		<tr>
			<td>Descripcion:</td>
			<td><textarea name="descripcion" rows="8" cols="30"></textarea></td>
		</tr>
		
		<td>Precio Venta:</td>
			<td><input type='number' id="precio" name='venta' required="required" ></td>
		</tr>
		<td>Precio Compra:</td>
			<td><input type='number' id="precio" name='compra' required="required" ></td>
		</tr>
		
		<tr>
			<td>Color:</td>
			<td><input type='color' name='color' ></td>
		</tr>
		
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
 
</html>