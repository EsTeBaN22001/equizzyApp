// *******BOTONES PARA EL MENU DE OPCIONES*******
const allMenuButtons = document.querySelectorAll('.menu-button')

allMenuButtons.forEach(button => {

  button.addEventListener('click', function () {
<<<<<<< HEAD
=======

>>>>>>> c6b541cb70a1dad09f062c6c77e6308a62799e7f
    const optionsContainer = button.nextElementSibling
    optionsContainer.classList.toggle('active')
    
  })

})

// *******BOTONES PARA MOSTRAR LAS OPCIONES*******
const allShowMoreButtons = document.querySelectorAll('.show-more-button')

allShowMoreButtons.forEach(showButton => {

  showButton.addEventListener('click', function(){

    showButton.classList.toggle('rotate-active')

    const questionContent = showButton.parentElement.parentElement.nextElementSibling

    questionContent.classList.toggle('active')

  }, true)

})