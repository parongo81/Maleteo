const TEMPLATE_USER = '<div>{{name}}</div>'

const pintaUsuarios = obj => {
  obj.forEach(element => {
    console.log(element)
    const li = document.createElement('li')
    li.classList.add('ClaseContenMensaje');
    const user = Sqrl.Render(TEMPLATE_USER, element)
    li.innerHTML = user
    document.getElementById('listado').appendChild(li)
  });
};

document.addEventListener('DOMContentLoaded', ()=> {
  fetch('https://jsonplaceholder.typicode.com/users').then(res => {
    return res.json()
  }).then(pintaUsuarios)
})