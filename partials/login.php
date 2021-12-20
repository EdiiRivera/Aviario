<?php
//cachamos las variables del AJAX, del FormData

$username = $_POST{'usuario'};
$password  = $_POST{'password'}; 

include('abrir_conexion.php');

try{

    $stmt = $con -> prepare("SELECT id,usuario,password FROM usuarios WHERE usuario = '$usuario' and password = md5('$password')");    
    $stmt -> execute();

    //si encuentra el resultado creeo las variables, si no lo encuentra no se creo. (controla variables de sesión)
    $stmt -> bind_result($db_id,$db_usuario,$db_password);
    $stmt -> fetch();

    if($db_id){
        @session_start();
        $_SESSION{'id'} = $db_id;
        $_SESSION{'usuario'} = $db_usuario;
        $_SESSION{'password'} = $db_password;

        $respuesta = array(
            'msg'=>'correcto',
            'usuario'=> $db_usuario,
           
            
        );
    }
    else {
        $respuesta = array(
            'msg'=>'Incorrecto',
            'usuario'=> $db_usuario,
           
            

        );
    }
}


       $stmt->close();
       $con->close();

catch(Exeption $e){
 $respuesta = array (
     'msg'=> $e -> getMessage()
 );
    

}

die(json_encode($respuesta));
include ('cerrar_conexion');

?>