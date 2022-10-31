// VARIABLES GLOBALES
const domain = 'http://localhost:3000'

// FUNCIONES HELPERS

// Función que obtiene el uniqId de la encuesta en el parámetro GET de la URL
function getIdToUrl() {
  const params = new URLSearchParams(window.location.search)
  const param = Object.fromEntries(params.entries())
  return param
}

// Función que hace la llamada al backend
async function callFetch(url, method, data) {

  try {

    const consult = await fetch(url, {
      method: method,
      body: data
    })

    const response = await consult.json()

    return response

  } catch (error) {
    console.log(error)
  }

}

function ocultActiveMenus(){

  const activeMenus = document.querySelectorAll('.options-container.active')

  activeMenus.forEach((menu)=>{
    menu.classList.remove('active')
  })

}