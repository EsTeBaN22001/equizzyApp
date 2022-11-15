const questions = document.querySelectorAll('.question')

questions.forEach(question => {

	// Fetch para obtener todas las opciones de las preguntas de la encuesta
	const idQuestion = question.dataset.idquestion

	const data = new FormData()
	data.append('idQuestion', idQuestion)

	const result = callFetch(`${domain}/options/list`, 'POST', data)

	result.then((options) => {

		if(options){
      
      if(options.length == 0){

        const optionsContainer = question.firstElementChild.nextElementSibling.firstElementChild.nextElementSibling

        const noOption = document.createElement('p')
        noOption.textContent = 'No hay opciones'
        noOption.classList.add('no-option-text')
        noOption.style.fontSize = '2rem'
        noOption.style.textAlign = 'center'

        optionsContainer.appendChild(noOption)
        
      }else{

        options.forEach((option)=>{
          addOptionDOM(question, option)
        })


      }


    }

	})

})




// Función para crear el DOM para las opciones y agregarlas a la pregunta
function addOptionDOM(question, option) {

  const optionsContainer = question.firstElementChild.nextElementSibling.firstElementChild.nextElementSibling

  const optionContainer = document.createElement('li')
  optionContainer.classList.add('option')

  const nameOption = document.createElement('p')
  nameOption.classList.add('name-option')
  nameOption.textContent = option.name

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