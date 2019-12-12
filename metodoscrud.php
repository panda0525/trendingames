<?php

class metodos
{
	public function MostrarDatos($consulta)
	{
		$c=new conectar();
		$conexion = $c -> conexion();
		$resultado= mysqli_query($conexion,$consulta);
	   return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
	}
	public function InsertarDatosNombre($insertardatos)
	{
		$c= new conectar();
		$conexion = $c -> conexion();
		$consulta ="INSERT into crudpoo (txtnombre,txtapellido)values ('$insertardatos[0]','$insertardatos[1]')";
		return $resultado=mysqli_query($conexion,$consulta);
	}
	public function ActualizarDatosNombre($insertardatos)
	{
		$c= new conectar();
		$conexion = $c -> conexion();
		$consulta= "update crudpoo set nombre='$insertardatos[0]', apellido='$insertardatos[1]' where id='$insertardatos[2]' ";
		return $resultado=mysqli_query($conexion,$consulta);
	}
	public function EliminarDatosNombre($identificacion)
	{
		$c= new conectar();
		$conexion = $c -> conexion();
		$consulta = "delete from crudpoo where id='$identificacion' ";
		return $resultado=mysqli_query($conexion,$consulta);
	}
}
?>