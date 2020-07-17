<?php
$conexion=mysqli_connect("localhost", "root", "", "prueba");

//Recibir datos y almacenar datos
$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
$email= $_POST["email"];
$clave= $_POST["password"];
$telefono= $_POST["numero"];
//Consulta para insertar
$insertar = "INSERT INTO registros(Nombre, Apellido, Email, Password, Numero) VALUES ('$nombre', '$apellido', '$email', '$clave', '$telefono')";
//Verificar duplicados
$verificar_usuario = mysqli_real_query($conexion, "SELECT * FROM registros WHERE Email == 'email'");
if (mysqli_num_rows($verificar_usuario) > 1) {
	# code...
	echo '<script>
			alert("El usuario ya esta registrado")
			<script>
		';
	exit;
}
//Ejecuatar consulta
$resultado = mysqli_real_query($conexion, $insertar);

if (!$resultado) {
	# code...
	echo "Error al registrarse";
}
else{
	echo "Usuario Registrado";
	header("C:xampp/");
}

//Cerrar conexion
mysqli_close($conexion);