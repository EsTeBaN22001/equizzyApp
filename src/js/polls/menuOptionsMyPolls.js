const allMenuButtons = document.querySelectorAll('.menu-button')

allMenuButtons.forEach(button => {
  button.addEventListener('click', function(e){
    const optionsContainer = button.nextElementSibling
    optionsContainer.classList.toggle('active')
  })
})