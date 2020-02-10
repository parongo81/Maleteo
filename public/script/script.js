console.log('hola');
const submitHandler = (event) => {

  event.preventDefault();
  const formdata = new FormData(event.target)
  fetch('https://httpbin.org/post', {
    method: 'post',
    body: formdata
  }).then((res) => { 
    console.log(res);
    
    const contenedorFormulario = document.getElementById('formularioPadre');
    contenedorFormulario.innerHTML = '';
    
    let contenedorMensaje = document.createElement('div');
    console.log(contenedorMensaje);
    contenedorMensaje.id = 'IdContenMensaje';
    contenedorMensaje.classList.add('ClaseContenMensaje');
    let contenedorMens=document.getElementById('IdContenMensaje')
    console.log(contenedorMens);
    let mensaje = document.createElement ('p');
    mensaje.id = 'IdMensaje'; 
    mensaje.classList.add('claseMensaje');
    contenedorMensaje.appendChild(mensaje);
    mensaje.innerHTML = '¡Su petición se ha realizado correctamente!'
    contenedorFormulario.appendChild(contenedorMensaje)
  })  
}
  
 document.addEventListener("DOMContentLoaded", function () {
  var form = document.getElementById("formulario"); //establecer formulario como variable
  console.log(form);
  form.addEventListener("submit", submitHandler); //oreja para oir el submit  
 });