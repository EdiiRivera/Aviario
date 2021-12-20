<?php


$id=$_POST['id'];
$usuario=$_POST['usuario'];





include ('conexion.php');

$sql = "DELETE FROM usuarios WHERE id = '$id' and usuario = '$usuario'";
 echo mysqli_query($conn, $sql); 
 include ('cerrar_conexion.php');

?>