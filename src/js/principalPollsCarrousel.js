if(document.querySelector('.polls-carrousel')){
  const config = {
    type: 'carousel',
    startAt: 0,
    perView: 3,
    focusAt: 'center',
    gap: 10,
    autoplay: 10000,
    animationDuration: 1000,
    hoverpause: true,
    breakpoints: {
      768: {
        perView: 2
      },
      480: {
        perView: 1
      }
    }
  }
  
  new Glide('.glide1', config).mount()
  new Glide('.glide2', config).mount()
  new Glide('.glide3', config).mount()
  new Glide('.glide4', config).mount()
  new Glide('.glide5', config).mount()
}