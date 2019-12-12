<?php
$id = $_GET['id'];
require_once "conexion.php";
require_once "metodoscrud.php";
$objeto= new metodos();
if ($objeto -> EliminarDatosNombre($id)==1) {
	header("location:index.php");
}
else
{
	echo "Fallo al intentar borrar registro";
}
?>