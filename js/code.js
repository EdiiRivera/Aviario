console.log("conectafo a Java Script");
document.querySelector('#form-login').addEventListener('submit', login);



function login(e) {
    e.preventDefault();
    console.log("Hax hecho click");
    var usuario = document.querySelector('#username').value;
    var password = document.querySelector('#password').value;
    console.log(usuario,password);


    if (usuario == '' || password === '') {
        Swal.fire(
            'OUPS!',
            'Los campos estan vacios',
            'error'
        )

    }
    else
    {
    var datos = new FormData();
    datos.append('usuario',usuario);
    datos.append('password',password);
    
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "partials/login.php", true);
    ajax.onload = function (){
        if(this.status=== 200){
            console.log(JSON.parse(ajax.responseText));
            //var mensaje = new Object();
            //mensaje = JSON.parse(ajax.responseText);
            //console.log(mensaje['msg']);
        }
    }
    ajax.send(datos);

    }
}