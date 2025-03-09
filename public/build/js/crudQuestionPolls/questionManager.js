// En este archivo se maneja toda la lógica para las preguntas y las opciones de una encuesta.
// Incluye el funcionamiento de los botones y menu's
// Incluye el manejo del eventDelegation para detectar a que se le está dando click y poder ejecutar las funciones para el crud de las opciones

const questionsContainer = document.querySelector('.questions-container')

questionsContainer.addEventListener('click', function(e){

  //BOTONES PARA EL MENU DE OPCIONES
  const menuButton = getParentElementByClass(e.target, 'menu-button')
  
  if(menuButton){

    const optionsContainer = menuButton.nextElementSibling
    if(optionsContainer.classList.contains('active')){
      ocultActiveMenus()
    }else{
      ocultActiveMenus()
      optionsContainer.classList.add('active')
    }

  }

  // BOTONES PARA MOSTRAR LAS OPCIONES
  const showMoreButton = getParentElementByClass(e.target, 'show-more-button')

  if(showMoreButton){
    
    ocultActiveMenus()

    showMoreButton.classList.toggle('rotate-active')

    const questionContent = getParentElementByClass(showMoreButton, 'question-header').nextElementSibling

    questionContent.classList.toggle('active')
    
  }

  // EDITAR UNA PREGUNTA
  const editQuestionButton = getParentElementByClass(e.target, 'edit-question')

  if(editQuestionButton){
    editQuestion(editQuestionButton)
  }

  // ELIMINAR UNA PREGUNTA
  
  const deleteQuestionButton = getParentElementByClass(e.target, 'delete-question')

  if(deleteQuestionButton){
    deleteQuestion(deleteQuestionButton)
  }

  // CREAR OPCIÓN
  const createOptionButton = getParentElementByClass(e.target, 'add-option-button')

  if(createOptionButton){
    createOption(e)
  }
  
  // EDITAR OPCIÓN
  if (e.target.classList.contains('edit-button')) {

    editOption(e)

  }
  
  // ELIMINAR OPCIÓN
  if(e.target.classList.contains('delete-button')){

    deleteOption(e)

  }

})