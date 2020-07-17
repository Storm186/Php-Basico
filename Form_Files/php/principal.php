<?php
#Conexiones
$host="localhost";
$db="prueba";
$user="root";
$clave="";
$conexion=mysqli_connect($host,$db,$user,$clave);

//consultas
$consulta="SELECT * FROM prueba";
$resultado=mysqli_real_query($conexion,$consulta);
$fila=mysqli_fetch_row($resultado);

echo $fila[0];