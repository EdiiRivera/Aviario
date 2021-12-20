<?php




$contra=$_POST['ps'];
$accion=$_POST['accion'];
$usuario=$_POST['usuario'];


if($accion=='login'){
    //abrimos conexion a la base de datos
    include ('conexion.php');
    //hacemos un try para probar el proceso que se ejecutara

    try{
        /*todo funciona bien*/

        //seleccionamos el usuariomen la base de datos
        $stmt=$conn->prepare("SELECT id,usuario,nombre,password,id_tipo,estado FROM usuarios WHERE usuario = '$usuario'and password = md5('$contra')");
        //remplazamos el valor del signo de interrogacion con la variable  y la letra s indica que es string
        //$stmt->bind_param('s',$usuario);
        //ejecutamos la consulta 
        $stmt->execute();
        //logear el usuario

        //almacenamos los resultados obtenidos en variables
        $stmt->bind_result($db_id, $db_usuario, $db_nombre, $db_password, $db_tipo, $db_estado);
        $stmt->fetch();
        //construimos la respuesta en arreglo para codificarla en objeto por js
       
        if($db_usuario){
            
           @session_start();
           $_SESSION['usuarioR']=$db_usuario;
           $_SESSION['estadoR']=$db_estado;
           $_SESSION['idusuarioR']=$db_id;
           $_SESSION['nombreR']=$db_nombre;
           $_SESSION['selectR']='Sin seleccion actual';
           $_SESSION['selectidR']='Sin seleccion actual';
           $_SESSION['nombredbR']='Sin seleccion actual';
           
            //creamos un array que codificamos en json para crear un objeto en js
            $respuesta = array(
                'msm'=>'correcto',
                'usuario'=> $usuario,
               
                
            );
            

             
             //exit();




            /*$respuesta = array(
                'id'=>$db_id,
                'Usuario'=>$db_usuario,
                'Password'=>$db_password,
                'Tipo'=>$db_tipo,
                'Estado'=>$db_estado
            );*/
            
            //comprobacion del password

            
            //sentencia de insescion

            


        }else{
            $respuesta = array(
                'msm'=>'revisa'
            );
        }
        







        //cerramos las conexiones de stmt y la conn de la db
        $stmt->close();
        $conn->close();


    }catch(Exeption $e){
        //ocurre un error
        $respuesta=array(
            // aqui con esta linea de comandos nos da el error especifico para debugear
            'pass' => $e->getMessage()
        );
    }
    die(json_encode($respuesta));


    // cerramos conexion a la base de datos
    include ('cerrar_conexion.php');
}


?>