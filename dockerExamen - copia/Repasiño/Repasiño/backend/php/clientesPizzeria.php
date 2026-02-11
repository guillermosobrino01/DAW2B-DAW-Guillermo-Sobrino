<?php
$telefono=$_GET["q"];
include('conexion.php');
$conexion=abrir();
mysqli_set_charset($conexion, 'utf8');
$sql="select * from usuarios where telefono='".$telefono."'";
$res = mysqli_query($conexion, $sql) or die("Error en la consulta " . mysqli_error($conexion));
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
echo "<usuarios>";
while ($fila = mysqli_fetch_assoc($res)) {
echo "<usuario>";
	foreach($fila as $campo => $valor){
		echo "<".$campo.">".$valor."</".$campo.">";
		}
echo "</usuario>";
}
echo "</usuarios>";
cerrar($conexion);
?>

