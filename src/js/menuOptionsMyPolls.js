const pollsContainer = document.querySelector('.polls-container')
let menuOptions

pollsContainer.addEventListener('click', function (e) {

  const menuOptionsAll = document.querySelectorAll('.options-container')

  menuOptionsAll.forEach((el) => {
    if (el.classList.contains('active')) {
      el.classList.remove('active')
    }
  })

  let target = e.target

  if (target.parentElement.tagName == "svg") {
    menuOptions = target.parentElement.parentElement.nextElementSibling
    menuOptions.classList.toggle('active')
  }

  if (target.className == 'menu-icon-container') {
    menuOptions = target.nextElementSibling
    menuOptions.classList.toggle('active')
  }
})