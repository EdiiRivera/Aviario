/* jshint browser: true */
/* jshint node: true */
/*jshint esversion: 6 */
function agregaform(datos){
    d=datos.split('||')
    $('#idac').val(d[0]);
   $('#usac').val(d[1]);
   $('#usac').val(d[2]);
   $('#usac').val(d[3]);
   $('#usac').val(d[4]);
   $('#usac').val(d[5]);
   $('#usac').val(d[6]);
   $('#usac').val(d[7]);
   switch(d[8]){
    case 1:
        $('#tiac').val('ROOT');
    break;
    case '2':
        $('#tiac').val('Administrador');
    break;
    case '3':
        $('#tiac').val('Cliente');
    break;
    case '4':
        $('#tiac').val('Guia');
    break;
    case '5':
        $('#tiac').val('Cocina');
    break;
    case '6':
        $('#tiac').val('Taquilla');
    break;
    case '7':
        $('#tiac').val('Souvenirs');
    break;
    case '8':
        $('#tiac').val('Fotos');
    break;

   }
   $('#esac').val(d[8]);
}

function actualiza(){
    console.log("conectado..");
    id= $('#idac').val();
    usuario= $('#usac').val();
    tipo= $('#tiac').val();
    estado= $('#esac').val();

    
    cadena="id="+id+"&usuario="+usuario+"&tipo="+tipo+"&estado="+estado;

    console.log(cadena);
    $.ajax({
        type:"POST",
        url:"partials/actualizar_usuarios.php",
        data: cadena,
        success:function(r){
            if(r==1){
                $('#tabla').load('componentes/tabla_us.php');
                CierraPopup();
                alertas_formr("usac");
            }else{
                alertas_formr("error");
            }
        }
    });
}



function agregaforme(datos){
    d=datos.split('||')
    $('#ide').val(d[0]);
   $('#use').val(d[1]);
   $('#use').val(d[2]);
   $('#use').val(d[3]);
   $('#use').val(d[4]);
   $('#use').val(d[5]);
   $('#use').val(d[6]);
   $('#use').val(d[7]);
   switch(d[8]){
    case 1:
        $('#tie').val('ROOT');
    break;
    case '2':
        $('#tie').val('Administrador');
    break;
    case '3':
        $('#tie').val('Cliente');
    break;
    case '4':
        $('#tie').val('Guia');
    break;
    case '5':
        $('#tie').val('Cocina');
    break;
    case '6':
        $('#tie').val('Taquilla');
    break;
    case '7':
        $('#tie').val('Souvenirs');
    break;
    case '8':
        $('#tie').val('Fotos');
    break;

   }
   $('#ese').val(d[8]);
}


function eliminar_usuario(){
    console.log("conectado..");
    id= $('#ide').val();
    usuario= $('#use').val();
    

    
    cadena="id="+id+"&usuario="+usuario;

    console.log(cadena);
    $.ajax({
        type:"POST",
        url:"partials/eliminar_usuarios.php",
        data: cadena,
        success:function(r){
            if(r==1){
                $('#tabla').load('componentes/tabla_us.php');
                CierraPopupeliminar();
                alertas_formr("usac");
            }else{
                alertas_formr("error");
            }
        }
    });
}






//----Funcion para cerrar los popups------------------
function CierraPopup() {
    $('#Editar').modal('hide');//ocultamos el modal
    $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
    $('.modal-backdrop').remove();//eliminamos el backdrop del modal
}

//----Funcion para cerrar los popups de eliminar------------------
function CierraPopupeliminar() {
    $('#Eliminar').modal('hide');//ocultamos el modal
    $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
    $('.modal-backdrop').remove();//eliminamos el backdrop del modal
}