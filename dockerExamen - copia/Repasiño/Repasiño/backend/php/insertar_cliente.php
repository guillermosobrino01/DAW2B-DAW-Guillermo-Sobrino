<?php
include('conexion.php');
$conexion=abrir();
$telefono=$_POST["telefono"];
$nombre=$_POST["nombre"];
$direccion=$_POST["direccion"];
$ciudad=$_POST["ciudad"];
$provincia=$_POST["provincia"];
$codPostal=$_POST["codPostal"];
mysqli_set_charset($conexion, 'utf8');
$sql="INSERT INTO usuarios (telefono,nombre,direccion,ciudad,provincia,codPostal) values ('".$telefono."','".$nombre."','".$direccion."','".$ciudad."','".$provincia."','".$codPostal."')";
$res = mysqli_query($conexion, $sql) or die("Error en la consulta " . mysqli_error($conexion));
cerrar($conexion);
?>
