<?php
include('conexion.php');

$usu = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];
$rol = $_POST["rol"];

// Verificar si el usuario ya existe
$sql = "SELECT COUNT(*) FROM login WHERE usuario = '$usu'";
$result = mysqli_query($conn, $sql);
$count = mysqli_fetch_array($result)[0];

if ($count > 0) {
    echo "El usuario ya existe en la base de datos.";
} else {
    // Insertar el usuario
    $sql = "INSERT INTO login (usuario, pass, rol) VALUES ('$usu', '$pass', '$rol')";
    if (mysqli_query($conn, $sql)) {
        echo "El usuario se agregó correctamente.";

        if ($rol == "Usuario") {
            header("Location: pag_user.php");
        } else if ($rol == "Admin") {
            header("Location: pag_admin.php");
        }
    } else {
        echo "Error al agregar el usuario: 
		<input type='submit'value='Ir al menu' onClick='volver()'>

		<script>
		function volver(){
			window.location.href='index.php';
	
		}
	
		</script>   "; . mysqli_error($conn);
    }
}
?>