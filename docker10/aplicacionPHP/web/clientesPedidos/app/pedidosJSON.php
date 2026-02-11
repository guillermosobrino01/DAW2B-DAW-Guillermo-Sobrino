<?php
$idcliente=$_POST['q'];
$conexion=mysqli_connect("db","neptuno_user","neptuno_pass","neptuno");
$sql="select idCliente,idPedido,idEmpleado,FechaPedido,FechaEntrega from pedidos where idCliente='".$idcliente."'";
$res=mysqli_query($conexion,$sql);
$datos=array();
sleep(5);
while ($fila = mysqli_fetch_assoc($res)) {
$datos[]=$fila;
		}
		$resultado = mysqli_query($conn, $sql);

if (!$resultado) {
    die("Error en query: " . mysqli_error($conn));
}
header("Content-Type: application/json");
echo json_encode($datos);
mysqli_close($conexion);
?>
