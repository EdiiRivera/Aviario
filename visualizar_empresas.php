<?php
$page_title = "Visualizar - Empresas";
require_once  'partials/headers.php';
?>
<!--contenido de la pagina-->

<div class="right_col" role="main" style="min-height: 3812px;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Visualizar - Empresas</h3>
              </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Todas las empresas</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                      <div class="row"><div class="col-sm-6">
                        <div class="dataTables_length" id="datatable_length">
                          <label>Mostrar
                            <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            </select> entradas
                          </label>
                        </div>
                      </div>


                      <div class="col-sm-6">
                        <label>Buscar</label>                          
                            <div class="input-group">
                              <input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable">
                                <div class="input-group-btn">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Filtros <span class="caret"></span>
                                  </button>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                      <li><label><input type="checkbox" value=""> Por nombre</label></li>
                                      <li><label><input type="checkbox" value=""> Por antigueadad</label></li>
                                    </ul>
                                </div>
                              <!-- /btn-group -->
                            </div>                          
                      </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 189px;">Nombre de la empresa</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 309px;">RFC</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 143px;">CURP</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 309px;">Direccion fiscal</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 309px;">Giro</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 76px;">Representante</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 140px;">RFC Representante</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 111px;">Correo</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                      <tr role="row" class="odd">
                          <td class="sorting_1">Dulce vida</td>
                          <td>LAMM870909</td>
                          <td>LAMM870909LLNPG09</td>
                          <td>********************</td>
                          <td>Software</td>
                          <td>Andres Sanchez Pérez</td>
                          <td>LAMM870909</td>
                          <td>andres.sp@gmail.com</td>
                        </tr>

                        <tr role="row" class="even">
                          <td class="sorting_1">Cafeteria "Gusto bueno"</td>
                          <td>AABB890909</td>
                          <td>AABB890909LLNPG09</td>
                          <td>********************</td>
                          <td>Software</td>
                          <td>Ana Flores Castillo</td>
                          <td>EEEE870909</td>
                          <td>ana.fc@gmail.com</td>
                        </tr>
   
                      </tbody>
                    </table>
                 

                   <div class="row">
                    <div class="col-sm-5">
                      <div class="dataTables_info" id="datatable-responsive_info" role="status" aria-live="polite">Mostrando 1 a 10 de 57 entradas</div>
                    </div>
                    <div class="col-sm-7">
                      <div class="dataTables_paginate paging_simple_numbers" id="datatable-responsive_paginate">
                        <ul class="pagination">
                          <li class="paginate_button previous disabled" id="datatable-responsive_previous"><a href="#" aria-controls="datatable-responsive" data-dt-idx="0" tabindex="0">Anterior</a></li>
                          <li class="paginate_button active"><a href="#" aria-controls="datatable-responsive" data-dt-idx="1" tabindex="0">1</a></li>
                          <li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="2" tabindex="0">2</a></li>
                          <li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="3" tabindex="0">3</a></li>
                          <li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="4" tabindex="0">4</a></li>
                          <li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="5" tabindex="0">5</a></li>
                          <li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="6" tabindex="0">6</a></li>
                          <li class="paginate_button next" id="datatable-responsive_next"><a href="#" aria-controls="datatable-responsive" data-dt-idx="7" tabindex="0">Siguiente</a></li>
                        </ul>
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