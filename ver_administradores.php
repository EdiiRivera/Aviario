<?php
$page_title = "Ver administradores - Control de usuarios";
require_once  'partials/headers.php';
?>
<!--contenido de la pagina-->

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ver administradores - Control de usuarios</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Todos los administradores</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div id="tabla"></div>
                  

                    <!-- Modal Editar -->
                    <div class="modal fade" id="Editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Editar Usuario</h4>
                          </div>
                          <div class="modal-body">
                            <label>Id del usuario</label>
                            <input type="Text" class="form-control" id="idac" placeholder="este es tu id" disabled>
                            <label>Nombre de usuario</label>
                            <input type="Text" class="form-control" id="usac" placeholder="Nuevo Nombre de Usuario">
                            <label>Estado</label>
                            <select class="form-control" id="esac">
                              <option>Activo</option>
                              <option>Inactivo</option>
                            </select>
                            <label>Tipo de usuario</label>
                            <select class="form-control" id="tiac">
                            <option></option>    
                            <option>Guia</option>
                            <option>Cocina</option>
                            <option>Taquilla</option>
                            <option>Souvenirs</option>
                            <option>Fotos</option>
                            <option>ROOT</option>
                            <option>Administrador</option>
                            <option>Cliente</option>
                            </select>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="actualizar">Confirmar</button>
                          </div>
                        </div>
                      </div> 
                    </div>

                     <!-- Modal Eliminar -->
                     <div class="modal fade" id="Eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Eliminar Usuario</h4>
                          </div>
                          <div class="modal-body">
                            <label>Estas seguro de eliminar este usuario??</label>
                            <label>Id del usuario</label>
                            <input type="Text" class="form-control" id="ide" placeholder="este es tu id" disabled>
                            <label>Nombre de usuario</label>
                            <input type="Text" class="form-control" id="use" placeholder="Nuevo Nombre de Usuario" disabled>
                            <label>Estado</label>
                            <select class="form-control" id="ese" disabled>
                              <option>Activo</option>
                              <option>Inactivo</option>
                            </select>
                            <label>Tipo de usuario</label>
                            <select class="form-control" id="tie" disabled>
                              <option>ROOT</option>
                              <option>Administrador</option>
                              <option>Cliente</option>
                            </select>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="eliminar">Confirmar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
</div> 


                     

<!--/contenido de la pagina-->
<?php
include_once 'partials/footers.php';
?>
<script src="js/funciones_us.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#tabla").load("componentes/tabla_us.php");
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#actualizar').click(function(){
      actualiza();
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#eliminar').click(function(){
      eliminar_usuario();
    });
  });
</script>


</body>

</html>