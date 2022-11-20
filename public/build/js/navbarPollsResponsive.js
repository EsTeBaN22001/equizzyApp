if(document.querySelector('.sitePollsLayoutContainer')){

  const sidebarOptions = document.querySelector('.sidebarOptions')
  const menuButton = document.querySelector('.navbar-menu-button')

  menuButton.addEventListener('click', function(){
    sidebarOptions.classList.toggle('active')
  })

}