<?php

$empresa=$_POST['empre'];
$idempresa=$_POST['idempre'];
$errores=0;


@session_start();
    $_SESSION['selectR']=$empresa;
    $_SESSION['selectidR']=$idempresa;
    $errores=0;



 if($errores===0){
    echo json_encode('los datos ingresados son '.$empresa);
}else{
    
    echo json_encode('error');
}



          

?>