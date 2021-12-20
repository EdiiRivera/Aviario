/* jshint browser: true */
/* jshint node: true */
/*jshint esversion: 6 */
console.log("conectado a js");

var formulario = document.getElementById('rform');
    rform.addEventListener("submit", e=>{
    e.preventDefault()
    console.log("diste clic");

    var datos= new FormData(formulario);

    //let regexemail= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    let regexusuario= /^\w+([a-zA-z0-9-_]?\w+)+$/
    let regexPass= /^\w+([a-zA-z0-9-_]?\w+)+$/
    let entrar= true
    if(!regexusuario.test(datos.get('usuario'))){
        alertas_formr("nombre");
        entrar= false;
    }
    if(!regexPass.test(datos.get('pwd'))){
        alertas_formr("password");
        entrar= false;
    }
    
    
    if(datos.get('pwd') != datos.get('pwdc')){
        alertas_formr("pasdif");
        entrar= false;
    }
    
    
    if (entrar==true){

        fetch('partials/post_us_new.php',{
            method:'POST',
            body: datos
        })
        .then(res => res.json())
        .then(data=>{
            console.log(data)
            if(data ==='error'){
                alertas_formr("des");
            }else{

                alertas_formr("registro");
                setTimeout(function(){
                    window.location.reload();
                }, 5000);


            }
        })
        
       
    }
   
})