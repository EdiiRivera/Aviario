/* jshint browser: true */
/* jshint node: true */
/*jshint esversion: 6 */
function alertas_formr(caso){
   switch(caso){
    case 'nombre':
        Swal.fire(
            'Campo no valido!',
            'el nombre de usuario solo admite letras, numeros guion y guion bajo',
            'info'
          )
    break;
    case 'password':
        Swal.fire(
            'Campo no valido!',
            'el Password solo admite letras, numeros guion y guion bajo',
            'info'
          )
    break;
    case 'pasdif':
        Swal.fire(
            'Campo no valido!',
            'los password no coinciden',
            'info'
          )
    break;
    case 'registro':
        Swal.fire({
            icon: 'success',
            title: 'Registrado!',
            text: 'se hizo el registro correctamente',
            timer: 5000,
            showConfirmButton: false
        })
    break;
    case 'error':
        Swal.fire(
            'OUPS!',
            'Algo salio mal',
            'error'
          )
    break;
    case 'usoc':
        Swal.fire(
            'OUPS!',
            'Este usuario ya esta en uso prueba con otro',
            'info'
          )
    break;
    case 'des':
        Swal.fire(
            'OUPS!',
            'Estees un error desconocido',
            'error'
          )
    break;
    case 'usac':
        Swal.fire(
            'Actializado!',
            'se Actualizo el usuario Correctamente',
            'success'
          )
    break;
    case 'pass_in':
        Swal.fire(
            'OUPS!',
            'Revisa tus contraseñas',
            'error'
          )
    break;
    case 'login':
        Swal.fire(
            'Bienvenido!',
            'Credenciales correctas',
            'success'
          )
    break;
        }
        
}




