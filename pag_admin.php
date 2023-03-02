<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <title>VaidrollTeamLogin7</title>
     <link rel="stylesheet" href="vaidroll.css">	
</head>
<table>
<th colspan="3">Bienvenido admin</th><th><a href="index.html">Salir</a></th>
<tr><th colspan="4"><h1>Listado de usuarios</h1></th></tr>
<tr>
<th>Usuario</th>
<th>Contraseña</th>
<th>Rol</th>
<th>Acciones</th> 
</tr>
<?php
		include('conexion.php');
		$sql = "SELECT * FROM login";
		$resultado = mysqli_query($conn, $sql);
		while ($mostrar = mysqli_fetch_array($resultado)) {
			?>
			<tr>
				<td><?php echo $mostrar['usuario'] ?></td>
				<td><?php echo $mostrar['pass'] ?></td>
				<td><?php echo $mostrar['rol'] ?></td>
				<td>
					<form method="post" action="EliminarUsuarios.php">
						<input type="hidden" name="usuario" value="<?php echo $mostrar['usuario'] ?>">
						<input type="submit" value="Eliminar">
					</form>
				</td>
			</tr>

<?php
		}
include('conexion.php');
$sql="select * from login";
$resultado=mysqli_query($conn,$sql);

?>
</table>

</body>
</html>