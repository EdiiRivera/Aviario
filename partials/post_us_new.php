<?php

$usuario=$_POST['usuario'];
$pass=$_POST['pwd'];
$tipo=$_POST['tipo'];
$nombre=$_POST['us_nom'];
$tipoArchivo = $_FILES['foto']['type'];
$nombreArchivo = $_FILES['foto']['name'];
$tamanoArchivo = $_FILES['foto']['size'];
$imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
$binariosImagen = fread($imagenSubida, $tamanoArchivo);
$id_tipo=0;
$errores=1;


switch ($tipo) {
    case 'ROOT':
        $id_tipo=1;
        $errores=0;
        break;
    case 'Administrador':
        $id_tipo=2;
        $errores=0;
        break;
    case 'Cliente':
        $id_tipo=3;
        $errores=0;
        break;
    case 'Guia':
        $id_tipo=4;
        $errores=0;
        break;        

    case 'Cocina':
        $id_tipo=5;
        $errores=0;
        break;
    case 'Taquilla':
        $id_tipo=6;
        $errores=0;
        break;
    case 'Souvenirs':
        $id_tipo=7;
        $errores=0;
        break;
    case 'Fotos':
        $id_tipo=8;
        $errores=0;
        break;
};

include ('conexion.php');

$binariosImagen = mysqli_escape_string($con, $binariosImagen);

$sql = "INSERT INTO usuarios (id,usuario,nombre,password,id_tipo,estado,imagen,nombre_imagen,tipo_imagen) VALUES ('', '$usuario', '$nombre', MD5('$pass'),'$id_tipo','Activo','" . $nombreArchivo . "','" . $binariosImagen . "','" . $tipoArchivo . "')";
 mysqli_query($conn, $sql); 
 include ('cerrar_conexion.php');


if($errores===0){
    echo json_encode('los datos ingresados son '.$usuario.' '.$password.' '.$id_tipo.' '.$tipo);
}else{
    
    echo json_encode('error');
}




?>
