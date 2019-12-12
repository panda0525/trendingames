<?php
require_once "conexion.php";

$objeto = new conectar();
$conexion = $objeto -> conexion();
$id = $_GET['id'];
$consulta="select * from crudpoo where id='$id'";
$resultado=mysqli_query($conexion,$consulta);
$mostrar=mysqli_fetch_row($resultado);
?>
<html>
<head></head>
<body>
<form action="actualizar.php" method="post">
	Formulario de Actualizacion <br>
	<input type="text" hidden="" value="<?php echo $id; ?>" name="id"><br><br>
	Nombre: <input type="text" size="5"  name="txtnombre" value="<?php echo $mostrar[0]; ?>"><br><br>
	Apellido: <input type="text" size="5"  name="txtapellido" value="<?php echo $mostrar[1]; ?>"><br><br>

	<button>modificar</button><br>
</form>
</body>
</html>