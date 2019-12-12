<?php
require_once"conexion.php";
require_once "metodoscrud.php";
$nombre= $_POST['txtnombre'];
$apellido= $_POST['txtapellido'];
$datos = array($nombre,$apellido);
$objeto = new metodos();
if ($objeto -> InsertarDatosNombre($datos)==1)
{
	header("location:index.php");
}
else 
{
echo "Fallo al agregar requisito";	
}
?>