const pollsContainer = document.querySelector('.polls-container')

pollsContainer.addEventListener('click', function(e){

  const optionsButton = getParentElementByClass(e.target, 'menu-button')

  const optionsContainer = optionsButton.nextElementSibling

  if(optionsContainer.classList.contains('active')){
    ocultActiveMenus()
  }else{
    ocultActiveMenus()
    optionsContainer.classList.add('active')
  }

})