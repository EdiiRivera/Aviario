<?php
$page_title = "Visualizar - Empresas";
require_once  'partials/headers.php';
?>
<!--contenido de la pagina-->

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Visualizar - Bases de datos</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Directorio general</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div id="tabla"></div>

					<div class="row">
                      <div class="col-sm-12">
                        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 189px;">Nombre de la empresa</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 309px;">Nombre del representante</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 143px;">Nombre del administrador</th>   
                      </thead>
                      
                      <tbody>
                      <tr role="row" class="odd">
                          <td class="sorting_1">Dulce vida</td>
                          <td>Andres Sanchez Pérez</td>
                          <td>Cesar Parce Flores</td>
                        </tr>

                      </tbody>
                    </table>   

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
</body>
</html>