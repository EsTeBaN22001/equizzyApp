// *******BOTONES PARA EL MENU DE OPCIONES*******
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

  // *******BOTONES PARA MOSTRAR LAS OPCIONES*******

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
  
  // CÓDIGO PARA EDITAR Y ELIMINAR UNA OPCION
  if (e.target.classList.contains('edit-button')) {

    editOption(e)

  } 
  
  if(e.target.classList.contains('delete-button')){

    deleteOption(e)

  }

})