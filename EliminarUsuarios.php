<?php
$conn = mysqli_connect("localhost", "root", "", "loginvaidroll7");

if (!$conn) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}

$usuario = $_POST['usuario'];

$stmt = mysqli_prepare($conn, "DELETE FROM login WHERE usuario = ?");


mysqli_stmt_bind_param($stmt, "s", $usuario);

if (mysqli_stmt_execute($stmt)) {
    echo "Registro eliminado correctamente.";
} else {
    echo "Error al eliminar el registro: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Eliminacion</title>
     <link rel="stylesheet" href="vaidroll.css">	
</head>
<body>
<table>

<p></p>
<a href="pag_admin.php">Regresar</a>
</table>
</body>
</html>