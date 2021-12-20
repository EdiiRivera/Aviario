<?php
$page_title = "Mis Empresas";
require_once  'partials/headers.php';
?>
<!--contenido de la pagina-->



<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>El nido</h3>
              </div>
              <div class="nav navbar-nav navbar-right">
              <button class="btn btn-info" id="deselect" name="deselect">Salir del nido</button>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Todos mis empleados</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div id="tabla"></div>
                  

                   
                     <!-- Modal Seleccionar -->
                     <div class="modal fade" id="select" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Mis trabajadores</h4>
                          </div>
                          <div class="modal-body">
                            <label>Estas seguro de iniciar con ??</label>
                            <label>Id de Razon social / nombre </label>
                            <input type="Text" class="form-control" id="idnr" placeholder="id de nombre/razon social" disabled>
                            <label>Nombre / razon social</label>
                            <input type="Text" class="form-control" id="nr" placeholder="Nombre / Razon Social" disabled>
                            <label>Base de Datos</label>
                            <input type="Text" class="form-control" id="bder" placeholder="Base de Datos " disabled>
                            <label>id admin</label>
                            <input type="Text" class="form-control" id="ida" placeholder="id Admin" disabled>
                            <label>Admin</label>
                            <input type="Text" class="form-control" id="adm" placeholder="Admin" disabled>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="seleccionar">Confirmar</button>
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
<script src="js/directorio.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#tabla").load("componentes/directorio.php");
  });
</script>


<script type="text/javascript">
  $(document).ready(function(){
    $('#seleccionar').click(function(){
      seleccionar_usuario();
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#deselect').click(function(){
      deseleccionar_usuario();
    });
  });
</script>


</body>

</html>