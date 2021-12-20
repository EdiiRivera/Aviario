console.log("conectado a js");


function agregaforme(datos){
    d=datos.split('||')
    $('#idnr').val(d[0]);
   $('#nr').val(d[1]);
   $('#bder').val(d[2]);
   $('#ida').val(d[3]);
   $('#adm').val(d[4]);
}



function seleccionar_usuario(){
    console.log("diste un clic");
    var emp=$('#nr').val();
    var idemp=$('#idnr').val();
    var datos = new FormData();
    datos.append('empre',emp);
    datos.append('idempre',idemp);

    

    

    fetch('partials/cambio_empresa.php',{
        method:'POST',
        body: datos
    })
    .then(res => res.json())
    .then(data=>{
        if(data ==='error'){
            alertas_formr("des");
        }else{
            console.log(data);
            Swal.fire({
                icon: 'success',
                title: 'Razon / nombre seleccionado',
                timer: 2000,
                showConfirmButton: false
            });


            setTimeout(function(){
                window.location.href = 'index2.php';
            }, 500);
            


        }
    });
    
    CierraPopupseleccionar();
}              

//----Funcion para cerrar los popups de eliminar------------------
function CierraPopupseleccionar() {
    $('#select').modal('hide');//ocultamos el modal
    $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
    $('.modal-backdrop').remove();//eliminamos el backdrop del modal
}


// deseleccionar / salir de empresa
function deseleccionar_usuario(){
    console.log("diste un clic");
    var emp='Sin seleccion actual';
    var idemp='Sin seleccion actual';
    var datos = new FormData();
    datos.append('empre',emp);
    datos.append('idempre',idemp);

    

    

    fetch('partials/cambio_empresa.php',{
        method:'POST',
        body: datos
    })
    .then(res => res.json())
    .then(data=>{
        if(data ==='error'){
            alertas_formr("des");
        }else{
            console.log(data);
            Swal.fire({
                icon: 'success',
                title: 'Has cerrado la empresa correctamente',
                timer: 2000,
                showConfirmButton: false
            });


            setTimeout(function(){
                window.location.href = 'index2.php';
            }, 500);
            


        }
    });
    
   
}              
