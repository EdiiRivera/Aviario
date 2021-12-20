<?php


$id=$_POST['id'];
$usuario=$_POST['usuario'];
$tipo=$_POST['tipo'];
$estado=$_POST['estado'];
$id_tipo = 0;

switch ($tipo) {
    case 'ROOT':
        $id_tipo=1;
        break;
    case 'Administrador':
        $id_tipo=2;
        break;
    case 'Cliente':
        $id_tipo=3;
        break;
};


include ('conexion.php');

$sql = "UPDATE usuarios SET usuario = '$usuario', id_tipo = '$id_tipo', estado = '$estado' WHERE id = '$id'";
 echo mysqli_query($conn, $sql); 
 include ('cerrar_conexion.php');

?>