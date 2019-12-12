<?php
require_once"conexion.php";
require_once"metodoscrud.php";

?>
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body bgcolor="#80cbc4">
<form action="insertar.php" method="post">
	<center>
	<hr>
	<br><br><br><br><br><br>
	<h3>	 INGRESO DE DATOS</h3><br><br>
<h6>Nombre:</h6> <input type="text" name="txtnombre"><br>
<h6>Apellido:</h6> <input type="text" name="txtapellido"><br><br>
 <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
    <i class="material-icons right">backup</i>
  </button>
</form>
<table border="2" class="striped , highlight , centered , responsive-table" >
	<tr>
		<td>nombre</td>
		<td>apellido</td>
		<td>actualizar</td>
		<td>eliminar</td>
	</tr>

<?php 
$objeto = new metodos();
$consulta ="select * from crudpoo";
$datos = $objeto -> mostrardatos($consulta);
foreach($datos as $entrada) {


?>
<tr bgcolor="white">

	<td>
		<?php 
		echo $entrada['txtnombre'];
		 ?>
	</td>
	
	<td>
		<?php 
		echo $entrada['txtapellido'];
		 ?>
	</td>
	
	<td>
		<form action="editar.php ?id=<?php echo $entrada['id'];?>" method="post">
			

	<button class="btn waves-effect waves-light" type="submit" name="action">Editar
    	<i class="material-icons right">brush</i>
	</button>


  </form>
		</td>
		<td>
			<form action="eliminar.php ?id=<?php echo$entrada['id'];?>" method="post">

				<button class="btn waves-effect waves-light" type="submit" name="action">Eliminar
    <i class="material-icons right">block</i>
  </button>
			</form>
		
	</td>
	</center>

</tr>
<?php } ?>
</table>

	<!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>