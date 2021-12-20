<?php
$page_title = "Alta - Usuario";
require_once  'partials/headers.php';
?>

<!--contenido de la pagina-->

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Alta de Usuarios</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Alta - Nuevo Usuario</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="rform" name="rform" data-parsley-validate class="form-horizontal form-label-left">
                    <br>
                    <br>
                    <br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Usuario<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="usuario" name="usuario" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre Completo<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="us_nom" name="us_nom" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="pwd" name="pwd" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Confirma tu Password<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="pwdc" class="form-control col-md-7 col-xs-12" type="text" name="pwdc">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de Usuario <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" id="tipo" name="tipo">
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
                      </div>
                      <div class="form-group">
                        <input type="file" class="form-control-file" name="foto">
                      </div>
                      <br>
                      <br>
                      <br>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancelar</button>
						              <button class="btn btn-primary" type="reset">Limpiar</button>
                          <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                      </div>
                    </form>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                  </div>
                  <p class="warnings" id="warnings"></p>
                  </div>
              </div>
            </div>
          </div>
</div>



<!--/contenido de la pagina-->
<?php
include_once 'partials/footers.php';
?>
<script src="js/validaciones.js"></script>
</body>
</html>
