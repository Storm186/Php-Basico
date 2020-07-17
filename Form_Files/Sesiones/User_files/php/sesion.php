<?php 

session_start();
$varsesion = $_SESSION['usuario'];
if ($varsesion == null || $varsesion = '') {
	# code...
	echo "usted no esta autorizado";
	die();
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Usuraio <?php echo $_SESSION['usuario'] ?> </h2>
	<a href="">cerrar sesion</a>
</body>
</html>