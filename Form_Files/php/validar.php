<?php

$usuario=$_POST["email"];
$clave=$_POST["clave"];
//conectar a la base de datos
$host="localhost";
$db="prueba";
$user="root";
$clave="";
$con=mysqli_connect($host,$db,$user,$clave);
//Consulta
$consult="SELECT * FROM registros WHERE Email='$usuario' and Password='$clave'";
$resultado=mysqli_query($con, $consult);

$filas=mysqli_num_rows($resultado);
if ($filas>0) {
	# code...
	header("location:Web-Page/Form_Files/Sesiones/User_files/user.html");
}
else{
	echo "Error en la autenticacion";
	exit;
}
mysqli_free_result($resultado);
mysqli_close($conexion)


?>