

    <div class="row">
        <div class="col-sm-12">
            <table class="table table-hover table-condensed table-bordered">
                <tr>
                    <td>id</td>
                    <td>Usuario</td>
                    <td>Tipo</td>
                    <td>Estado</td>
                    <td>Editar</td>
                    <td>Eliminar</td>
                </tr>
                <?php
                    include ('../partials/conexion.php');
                    $sql="SELECT id, usuario, id_tipo, estado from usuarios";
                    $result=mysqli_query($conn, $sql);
                    while($ver=mysqli_fetch_row($result)){
                        $datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3];
                    
                ?>
                <tr>
                    <td><?php   echo $ver[0]   ?></td>
                    <td><?php   echo $ver[1]?></td>
                    <td><?php   switch($ver[2]){
                                    case 1:
                                        echo ("ROOT");
                                        break;
                                    case 2:
                                        echo ("Administrador");
                                        break;
                                    case 3:
                                        echo ("Cliente");
                                        break;
                                    };
                    ?>
                    </td>
                    <td><?php   echo $ver[3]
                                   
                    ?>
                    </td>
                    <td>
                        <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#Editar" onclick="agregaform('<?php echo $datos ?>')" ><span></span></button>
                    </td>
                    <td>
                        <button class="btn btn-danger glyphicon glyphicon-remove" data-toggle="modal" data-target="#Eliminar" onclick="agregaforme('<?php echo $datos ?>')"></button>
                    </td>
                </tr>
                <?php
                    }
                    
                ?>
            </table>
            <?php
            include ('../partials/cerrar_conexion.php');
            ?>
        </div>
    </div>


