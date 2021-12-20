<?php
$page_title = "Alta - Empresa";
require_once  'partials/headers.php';
?>
<!--contenido de pagina-->

<div class="right_col" role="main">
    <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Alta de Empresas</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="text-center">
                    <h2>Empresa - Nueva Empresa</h2>
                   <hr class="divider">
                  </div>
                  <div class="x_content">
                    <br />
                      <!--Formulario de alta de empresa-->
                    <form id="formAltaEmp" data-parsley-validate class="form-horizontal">

                        <!--Tipo de persona-->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Persona Fisica o Moral" id="lblTipoPersona">Persona fisica o moral <span class="required">*</span>
                            </label>
                            <div class="col-lg-8">
                                <fieldset>
                                    <label>
                                        <input type="radio" name="tipoPersona" id="tipoPersona1" value="moral" > Moral
                                    </label>
                                    <label>
                                        <input type="radio" name="tipoPersona" id="tipoPersona2" value="fisica"> Fisica
                                    </label>
                                </fieldset>
                            </div>
                        </div>
                        <!--razon social-->
                      <div class="form-group" id="divRazon">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Nombre o razon" id="lblRazon">Razon Social <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="razon" name="razon" class="form-control col-md-7 col-xs-12"  >
                            <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                            <div id="alerta1" class="col-lg-8"></div>
                        </div>
                      </div>

                        <!--Nombre-->
                        <div class="form-group" id="divNombre" hidden>
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Nombre o razon" id="lblRazon">Nombre<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="nombre" name="nombre" class="form-control col-md-7 col-xs-12"  >
                                <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                                <div id="alerta2" class="col-lg-8"></div>
                            </div>
                        </div>

                        <!--RFC-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">RFC <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="rfc" name="rfc" required class="form-control col-md-7 col-xs-12"  >
                            <div id="alerta3" class="col-lg-8"></div>
                        </div>
                      </div>
                        <!--CURP-->
                      <div class="form-group" id="divCURP" hidden>
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">CURP <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="curp" class="form-control col-md-7 col-xs-12" type="text" name="curp" >
                            <div id="alerta4" class="col-lg-8"></div>
                        </div>
                      </div>
                        <!--Giro de la empresa-->
                        <div class="form-group" id="divGiro">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Giro de la Empresa <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="giro" name="giro" class="date-picker form-control col-md-7 col-xs-12" type="text"  >
                                <div id="alerta5" class="col-lg-8"></div>
                            </div>
                        </div>
                        <!--Direccion fiscal-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Dirección Fiscal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="direccion" name="direccion" class="date-picker form-control col-md-7 col-xs-12" required type="text"  >
                            <div id="alerta6" class="col-lg-8"></div>
                        </div>
                      </div>
                        <!--Representante legal-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Representante Legal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="representante" name="representante" class="date-picker form-control col-md-7 col-xs-12" required type="text"  >
                            <div id="alerta7" class="col-lg-8"></div>
                        </div>
                      </div>
                        <!--RFC representante legal-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">RFC del Representante legal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="rfcr" name="rfcr" class="date-picker form-control col-md-7 col-xs-12" required type="text"  >
                            <div id="alerta8" class="col-lg-8"></div>
                        </div>
                      </div>
                        <!--CURP representante legal-->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">CURP del Representante legal <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="curpr" name="curpr" class="date-picker form-control col-md-7 col-xs-12" required type="text"  >
                                <div id="alerta9" class="col-lg-8"></div>
                            </div>
                        </div>
                        <!--Correo electronico-->
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Correo Electronico <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="email" name="email" class="date-picker form-control col-md-7 col-xs-12" required type="email">
                            <div id="alerta10" class="col-lg-8"></div>
                        </div>
                      </div>
                        <hr class="ln_solid">

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button class="btn btn-primary" type="button">Cancelar</button>
                                <button class="btn btn-primary" type="reset" >Limpiar</button>
                                <button type="submit" class="btn btn-success" id="btnGuardar" name="btnGuardar" disabled>Guardar</button>
                            </div>
                        </div>

                    </form>
                  </div>
                  <!--/contenido de pagina-->

                
                </div>
              </div>
            </div>
    </div>
</div>



    <?php
    include_once 'partials/footers.php';
    ?>


<script>

</script>


<script src="js/empresaAlta.js"></script>

    </body>


</html>