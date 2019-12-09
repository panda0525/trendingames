# trendingames
!DOCTYPE html>
<html>
<head></head>

<body background="trendingames.png">
	<center>
</body>


<?php session_start();
if (isset($_SESSION['usuario'])) {
	header('Location: contenido.php');
} else {
	header('Location: registrate.php');
}
?>
</center>
</html>
