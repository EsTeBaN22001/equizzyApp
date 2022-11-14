// *******BOTONES PARA EL MENU DE OPCIONES*******
const allMenuButtons = document.querySelectorAll('.menu-button')

allMenuButtons.forEach(button => {

  button.addEventListener('click', function () {
    const optionsContainer = button.nextElementSibling
    if(optionsContainer.classList.contains('active')){
      ocultActiveMenus()
    }else{
      ocultActiveMenus()
      optionsContainer.classList.add('active')
    }
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

})