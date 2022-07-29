if(document.querySelector('.navbar-container')){
    // Sticky menu
    window.onscroll = function(){stickyMenu()}

    const navbar = document.querySelector('.navbar-container')
    const sticky = navbar.offsetTop
    const nextElement = navbar.nextSibling.nextSibling;
    
    function stickyMenu(){
      if(window.pageYOffset >= sticky){
        navbar.classList.add('sticky')
        nextElement.style.paddingTop = `${navbar.offsetHeight}px`;
      }else{
        navbar.classList.remove('sticky')
        nextElement.style.paddingTop = "initial";
      }
    }
}