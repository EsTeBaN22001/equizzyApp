if(document.querySelector('.polls-carrousel')){

  const config = {
    type: 'carousel',
    startAt: 0,
    perView: 2,
    focusAt: 'center',
    gap: 10,
    autoplay: 5000,
    animationDuration: 1000,
    hoverpause: true,
    breakpoints: {
      480: {
        perView: 1
      }
    }
  }
  
  new Glide('.glide', config).mount()

}