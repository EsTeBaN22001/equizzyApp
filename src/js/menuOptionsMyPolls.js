if (document.querySelector('.polls-container')) {

  // Obtiene una lista de todos losb las encuestas
  let allPolls = document.querySelectorAll('.poll')
  
  allPolls.forEach(poll => {
    //Si no se le da click al boton ocultar todos los menus
    const pollsContainer = document.querySelector('.polls-container')

    pollsContainer.addEventListener('click', function(e){
      console.log(e.target)
      if(e.target.classList != 'menu-button'){
        let allMenuOptions = document.querySelectorAll('.options-container')

        allMenuOptions.forEach(menu =>{
          menu.classList.remove('active')
        })
      }
    })


    let menuButton = poll.lastElementChild.childNodes[3]

    menuButton.addEventListener('click', function(){
      // Oculta todos los menus activos
      let allMenuOptions = document.querySelectorAll('.options-container')

      allMenuOptions.forEach(menu =>{
        menu.classList.remove('active')
      })
      
      // Muestra el menu al que se le dio click
      const menuOptions = menuButton.nextElementSibling
      if(menuOptions.classList[1]){
        menuOptions.classList.remove('active')
      }else{
        menuOptions.classList.add('active')
      }
    })
  })
}