// VARIABLES GLOBALES
const domain = 'http://localhost:3000'
const urlPoll = getIdToUrl().poll ?? ''

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

// Oculta todos los menús activos en la página
function ocultActiveMenus(){

  const activeMenus = document.querySelectorAll('.options-container.active')

  activeMenus.forEach((menu)=>{
    menu.classList.remove('active')
  })

}

// Sube desde el elemento hasta el padre con una clase en específico
function getParentElementByClass(element, objetiveClass){
  let actualElement = element

  while(!actualElement.classList.contains(objetiveClass)){
    actualElement = actualElement.parentElement
  }

  return actualElement
}

// Función para crear el DOM para las opciones y agregarlas a la pregunta
function addOptionDOM(question, optionName) {

  const optionsContainer = question.firstElementChild.nextElementSibling.firstElementChild.nextElementSibling

  const optionContainer = document.createElement('li')
  optionContainer.classList.add('option')

  const nameOption = document.createElement('p')
  nameOption.classList.add('name-option')
  nameOption.innerHTML += `${optionName}`

  const optionActions = document.createElement('div')
  optionActions.classList.add('option-actions')

  const editButton = document.createElement('button')
  editButton.classList.add('option-button', 'edit-button')
  editButton.textContent = 'Editar'

  const deleteButton = document.createElement('button')
  deleteButton.classList.add('option-button', 'delete-button')
  deleteButton.textContent = 'Eliminar'

  // Agregar los botones al div "option-actions"
  optionActions.appendChild(editButton)
  optionActions.appendChild(deleteButton)

  // Agregar el "nameOption" y el "optionActions" al elemento "option"
  optionContainer.appendChild(nameOption)
  optionContainer.appendChild(optionActions)

  // Agregar la opción al container "options-list"
  optionsContainer.appendChild(optionContainer)

}