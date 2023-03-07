// *******BOTONES PARA EL MENU DE OPCIONES*******
<<<<<<< HEAD
const allMenuButtons = document.querySelectorAll('.menu-button')

allMenuButtons.forEach(button => {

  button.addEventListener('click', function () {
    const optionsContainer = button.nextElementSibling
=======
const questionsContainer = document.querySelector('.questions-container')

questionsContainer.addEventListener('click', function(e){

  //BOTONES PARA EL MENU DE OPCIONES
  const menuButton = getParentElementByClass(e.target, 'menu-button')
  
  if(menuButton){

    const optionsContainer = menuButton.nextElementSibling
>>>>>>> dev
    if(optionsContainer.classList.contains('active')){
      ocultActiveMenus()
    }else{
      ocultActiveMenus()
      optionsContainer.classList.add('active')
    }
<<<<<<< HEAD
  })

})

// *******BOTONES PARA MOSTRAR LAS OPCIONES*******
const allShowMoreButtons = document.querySelectorAll('.show-more-button')

allShowMoreButtons.forEach(showButton => {

  showButton.addEventListener('click', function(){
    ocultActiveMenus()

    showButton.classList.toggle('rotate-active')

    const questionContent = showButton.parentElement.parentElement.nextElementSibling

    questionContent.classList.toggle('active')

  }, true)
=======

  }

  // *******BOTONES PARA MOSTRAR LAS OPCIONES*******

  const showMoreButton = getParentElementByClass(e.target, 'show-more-button')

  if(showMoreButton){
    
    ocultActiveMenus()

    showMoreButton.classList.toggle('rotate-active')

    const questionContent = getParentElementByClass(showMoreButton, 'question-header').nextElementSibling

    questionContent.classList.toggle('active')
    
  }

  // ELIMINAR UNA PREGUNTA
  
  const deleteQuestionButton = getParentElementByClass(e.target, 'delete-question')

  if(deleteQuestionButton){
    deleteQuestion(deleteQuestionButton)
  }

  // EDITAR UNA PREGUNTA
  const editQuestionButton = getParentElementByClass(e.target, 'edit-question')

  if(editQuestionButton){
    editQuestion(editQuestionButton)
  }
>>>>>>> dev

})