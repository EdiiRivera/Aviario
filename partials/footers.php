
<!-- /footer content -->
<!--cierre del divisor de <div class="main_container">  en headers-->
</div>
<!--cierre del divisor de <div class="container body">  en headers-->
</div>
<footer>
    <div class="pull-right">
        Nomina de empleados - Hecho por <a href="javascript:void(0)">...</a>
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->


<!-- jQuery -->
<script src="plantilla/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plantilla/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plantilla/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="plantilla/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="plantilla/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="plantilla/vendors/moment/min/moment.min.js"></script>
<script src="plantilla/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-datetimepicker -->    
<script src="plantilla/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<!-- jQuery Sparklines -->
<script src="plantilla/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- Flot -->
<script src="plantilla/vendors/Flot/jquery.flot.js"></script>
<script src="plantilla/vendors/Flot/jquery.flot.pie.js"></script>
<script src="plantilla/vendors/Flot/jquery.flot.time.js"></script>
<script src="plantilla/vendors/Flot/jquery.flot.stack.js"></script>
<script src="plantilla/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="plantilla/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="plantilla/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="plantilla/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="plantilla/vendors/DateJS/build/date.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="plantilla/vendors/moment/min/moment.min.js"></script>
<script src="plantilla/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="plantilla/build/js/custom.min.js"></script>

<!-- Initialize datetimepicker -->
<script>
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="js/alertas.js"></script>

