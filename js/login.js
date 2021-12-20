/* jshint browser: true */
/* jshint node: true */
/* jshint esversion: 6 */
console.log("conectado a js");

document.querySelector('#lform').addEventListener('submit', login);

function login(e){
    e.preventDefault();

    console.log("aqui vamos...");

    var usuario = document.querySelector('#lus').value,
        password = document.querySelector('#lpas').value,
        tipo = "login";
    console.log(usuario + " " + password);

    if(usuario=== '' || password=== ''){
        Swal.fire(
            'OUPS!',
            'Los campos estan vacios',
            'error'
          )
            
    }else{
        let regexusuario= /^\w+([a-zA-z0-9-_]?\w+)+$/
        let regexPass= /^\w+([a-zA-z0-9-_]?\w+)+$/
        let entrar= true
        if(!regexusuario.test(usuario)){
            alertas_formr("nombre");
            entrar= false;
        }
        if(!regexPass.test(password)){
            alertas_formr("password");
            entrar= false;
        }


        //datos que se envian al servidor 
        var datos = new FormData();
        console.log(password);
        datos.append('ps',password);
        datos.append('usuario', usuario);
        datos.append('accion', tipo);


        //obtenemos el valor de usuario del array datos
        //    console.log(datos.get('usuario'));


        //cramos el llamado a ajax

        var xhr = new XMLHttpRequest();

        //abrir la conexion (el vlor true nos idica que la operacion es asincrona)

        xhr.open('POST','partials/back_login.php', true);


        //retorno de valores

        xhr.onload = function(){
            //comprobamos que la ajecuccion fue exitosa
            if(this.status === 200 ){

                console.log(JSON.parse(xhr.responseText));



                //creamos un objeto en js
                var mensaje = new Object();
                //asigmanos la respuesta al objeto
                mensaje = JSON.parse(xhr.responseText);
                //podemos acceder alas propiedades del objeto
                console.log(mensaje['msm']);
                console.log(mensaje['usuario']);
               

                

                if(mensaje['msm']==='correcto'){
                    //mensaje personalizado
                    Swal.fire({
                        icon: 'success',
                        title: 'Hola  '+ mensaje['usuario'],
                        timer: 2000,
                        showConfirmButton: false
                    });

                    setTimeout(function(){
                        window.location.href = 'index2.php';
                    }, 2000);
                    
                    
                    //setTimeout("location.href='index2.php'", 800);
                    
                    
                }else{
                    alertas_formr("pass_in");
                }
                
                //console.log(xhr.responseText);

                // si queremos trabajar con los datos de la respuesta podemos convertir un arreglo de respuesta a un objeto en js con:
                //console.log(JSON.parse(xhr.responseText));
               
            }
        }

        //enviamos la peticion con lo antes establecido

        xhr.send(datos);
    }
}