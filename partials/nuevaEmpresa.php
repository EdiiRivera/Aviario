<?php





//Comprobar si las variables estan vacias
$RazonSocial= !empty($_POST['razon']) ? $_POST['razon'] : '';
$Nombre= !empty($_POST['nombre']) ? $_POST['nombre'] : '';
$RFC= !empty($_POST['rfc']) ? $_POST['rfc'] : '';
$CURP= !empty($_POST['curp']) ? $_POST['curp'] : '';
$Direccion= !empty($_POST['direccion']) ? $_POST['direccion'] : '';
$Giro= !empty($_POST['giro']) ? $_POST['giro'] : '';
$NombreRep= !empty($_POST['representante']) ? $_POST['representante'] : '';
$RFCRep= !empty($_POST['rfcr']) ? $_POST['rfcr'] : '';
$CURPRep= !empty($_POST['curpr']) ? $_POST['curpr'] : '';
$CorreoElec= !empty($_POST['email']) ? $_POST['email'] : '';
$TipoPersona= !empty($_POST['tipoPersona']) ? $_POST['tipoPersona'] : '';

//Evitar un acceso directo por URL o un campo vacio enviado por un ispector de codigo
if(empty($CURPRep) || empty($RFC) || empty($CURPRep) || empty($Direccion) || empty($CorreoElec)) {
    die('Direct access not permitted');
}

//Mediante un XOR evitamos que alguien manipule los datos y solo acepte o nombre o razon social
if(!empty($RazonSocial) && !empty($Nombre)) {
    die('Ha ocurrido un error inesperado, por favor recarga la pagina');
}
if(empty($RazonSocial) && empty($Nombre)) {
    die('Ha ocurrido un error inesperado, por favor recarga la pagina');
}



//inicializar variables para acceder a la base de datos
$config = require __DIR__ . '/../config/app.php';
$host = $config['database']['host'];
$db_username = $config['database']['username'];
$db_password = $config['database']['password'];
$sql_tabla = null;
$sql_datos = null;
$sql2 = null;

//variables de session
@session_start();
$id_admin=$_SESSION['idusuarioR'];
$admin=$_SESSION['nombreR'];


$errores=1;

//generar el nombre de la base de datos con el RFC de la empresa y una cadena de caracteres aleatoria
$length = 10;
$nombreDB=$RFC.(substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length));


$conn2 = new mysqli($host, $db_username, $db_password);
// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
}
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $nombreDB";



if($TipoPersona=="moral"){
    $sql_tabla="CREATE TABLE `datos` (
        `id` int(5) NOT NULL,
        `razon_social` varchar(100) NOT NULL,
        `rfc` varchar(13) NOT NULL,        
        `giro` varchar(50) NOT NULL,
        `direccion` varchar(50) NOT NULL,
        `representante` varchar(100) NOT NULL,
        `rfc_representante` varchar(15) NOT NULL,
        `curp_representante` VARCHAR(18) NOT NULL ,
        `correo` varchar(20) NOT NULL,
        `fecha` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ";
    $sql_datos="INSERT INTO datos (id,razon_social, rfc,giro,direccion,representante,rfc_representante,curp_representante,correo) VALUES (
                                                                                                               '',
                                                                                                               '$RazonSocial',
                                                                                                               '$RFC',
                                                                                                               '$Giro',
                                                                                                               '$Direccion',
                                                                                                               '$NombreRep',                                                                                                               
                                                                                                               '$RFCRep',
                                                                                                               '$CURPRep',
                                                                                                               '$CorreoElec')
    ";
    
    $sql2 = "INSERT INTO directorio (id_registro,nombre_empresa, id_admin, admin,representante, bd_empresa) VALUES ('', '$RazonSocial', '$id_admin ', '$admin', '$NombreRep', '$nombreDB')";

} else if($TipoPersona=="fisica"){
    $sql_tabla="CREATE TABLE `datos` (
        `id` int(5) NOT NULL,
        `nombre` varchar(100) NOT NULL,
        `rfc` varchar(13) NOT NULL,        
        `curp` VARCHAR(18) NOT NULL ,
        `direccion` varchar(50) NOT NULL,
        `representante` varchar(100) NOT NULL,
        `rfc_representante` varchar(15) NOT NULL,
        `curp_representante` VARCHAR(18) NOT NULL ,
        `correo` varchar(20) NOT NULL,
        `fecha` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ";
    
    $sql_datos="INSERT INTO datos (id,nombre, rfc,curp,direccion,representante,rfc_representante,curp_representante,correo) VALUES (
                                                                                                               '',
                                                                                                               '$Nombre',
                                                                                                               '$RFC',
                                                                                                               '$CURP',
                                                                                                               '$Direccion',
                                                                                                               '$NombreRep',                                                                                                               
                                                                                                               '$RFCRep',
                                                                                                               '$CURPRep',
                                                                                                               '$CorreoElec')
    ";
    $sql2 = "INSERT INTO directorio (id_registro,nombre_empresa, id_admin,admin,representante, bd_empresa) VALUES ('', '$Nombre', '$id_admin ', '$admin', '$NombreRep', '$nombreDB')";
}
else{
    die();
}

$sql_tabla2="CREATE TABLE `empleados` (
 `id_empleado` INT(5) NOT NULL AUTO_INCREMENT ,
 `numero_empleado` VARCHAR(15) NOT NULL ,
 `nombre_empleado` VARCHAR(60) NOT NULL ,
 `rfc_empleado` VARCHAR(13) NOT NULL ,
 `curp_empleado` VARCHAR(18) NOT NULL ,
 `nss_empleado` INT(11) NOT NULL ,
 `fecha_ingr` DATE NOT NULL ,
 `fecha_baja` DATE NOT NULL ,
 `puesto` VARCHAR(50) NOT NULL ,
 `departamento` VARCHAR(50) NOT NULL ,
 `salario_diario`  DECIMAL(8,2) NOT NULL ,
 `salario_inte`  DECIMAL(8,2) NOT NULL ,
 `direccion_empleado` VARCHAR(100) NOT NULL ,
 `tipo_empleado` VARCHAR(15) NOT NULL , 
 `correo_empleado` VARCHAR(50) NOT NULL ,
 PRIMARY KEY (`id_empleado`)) ENGINE = InnoDB; 
";
$sql_tabla3="CREATE TABLE `archivos` (
 `id_archivo` INT(8) NOT NULL AUTO_INCREMENT ,
 `nombre_archivo` VARCHAR(50) NOT NULL ,
 `ubicacion_archivo` VARCHAR(60) NOT NULL ,
 `fecha_creacion` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
 PRIMARY KEY (`id_archivo`)) ENGINE = InnoDB;
";



if ($conn2->query($sql) === TRUE) {
   /* echo json_encode("Base de datos creada");*/
    $errores=0;
    $conn2->query("USE $nombreDB");
    $conn2->query($sql_tabla);
    $conn2->query($sql_tabla2);
    $conn2->query($sql_tabla3);
    $conn2->query($sql_datos);
} else {
    echo json_encode("Error al crear la base de datos: " . $conn2->error);
    $conn2->close();
    die();
}
$conn2->close();


/*guardar datos en el directorio*/
include ('conexion.php');

mysqli_query($conn, $sql2);
include ('cerrar_conexion.php');
if($errores===0){
    echo json_encode('los datos ingresados son '.$RazonSocial.' '.$id_admin.' '.$nombreDB);

}else{
    echo json_encode('error');
}

