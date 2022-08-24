if(document.querySelector('.sitePollsLayoutContainer')){

  const sidebarOptions = document.querySelector('.sidebarOptions')
  const menuButton = document.querySelector('.menu-button')

  menuButton.addEventListener('click', function(){
    sidebarOptions.classList.toggle('active')
  })

}