<?php
require_once"conexion.php";
require_once "metodoscrud.php";
$nombre= $_POST['txtnombre'];
$apellido= $_POST['txtapellido'];
$id      =$_POST['id'];
$datos = array($nombre,$apellido,$id);
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