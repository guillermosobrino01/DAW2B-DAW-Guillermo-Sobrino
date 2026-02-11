<?php
$telefono=$_POST["telefono"];
$pedido=$_POST["pedido"];
include('conexion.php');
$conexion=abrir();
mysqli_set_charset($conexion, 'utf8');
$sql="INSERT INTO pedidos (telefono,txtpedido) values ('".$telefono."','".$pedido."')";
$res = mysqli_query($conexion, $sql) or die("Error en la consulta " . mysqli_error($conexion));
cerrar($conexion);
?>
