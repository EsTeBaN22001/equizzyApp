const allMenuButtons = document.querySelectorAll('.menu-button')

allMenuButtons.forEach(button => {
  button.addEventListener('click', function(e){
    const optionsContainer = button.nextElementSibling
    if(optionsContainer.classList.contains('active')){
      ocultActiveMenus()
    }else{
      ocultActiveMenus()
      optionsContainer.classList.add('active')
    }
  })
})