const TEMPLATE = '<li><div class="divListado"><p class="pNombre">{{name}}</p><div class="contenedorValoracion"><div class="cuadrado"></div><p class="pValoracion">{{rating}}</p></div></div></li>'

const pintaListado = (arr) => {
  let html = ''
  arr.forEach(element => {
    html += Sqrl.Render(TEMPLATE, element)
  });
  document.getElementById('listado').innerHTML = html
}

document.addEventListener('DOMContentLoaded', () =>{
  fetch('https://jsonblob.com/api/jsonblob/68f0896f-224a-11ea-b6f9-fda03b8457bd').then((res) =>{
    res.json().then(pintaListado)
  })
})