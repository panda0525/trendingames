<?php

class conectar{
	public $servidor ="localhost"; 
	public $usuario= "root";
	public $bd ="trendi";
	public $password="";
	public function conexion()
	{
		$conexion=mysqli_connect(
			$this -> servidor,
			$this -> usuario,
			$this -> password,
			$this -> bd
		);
		return $conexion;
	}
}
$objeto= new conectar();
if ($objeto -> conexion()) {
	echo "la tienes conectada";
}
else
{
 	echo "La tienes desconectada";
}
?>