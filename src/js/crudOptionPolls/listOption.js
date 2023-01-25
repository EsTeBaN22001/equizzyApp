// LISTAR LAS OPCIONES
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
          addOptionDOM(question, option.name, option.id)
        })

      }

    }

	})

})