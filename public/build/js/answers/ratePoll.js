const starsWidget = document.querySelector('.stars-widget')

let starId = null

starsWidget.addEventListener('click', (e)=>{
  
  const stars = document.querySelectorAll('.fa-star')

  stars.forEach((star)=>{

    star.classList.remove('rated')

  })
  
  const star = getParentElementByClass(e.target, 'fa-star')
  
  starId = star.dataset.rateid
  
  for( let i = 1 ; i <= starId ; i++ ){
    
    let ratedStar = document.querySelector(`[data-rateid="${i}"]`)
    
    ratedStar.classList.add('rated')

  }
  
})

const rateButton = document.querySelector('.rate-button')

rateButton.addEventListener('click', async ()=> {

  if(starId){
    const data = new FormData()
    data.append('rate', starId)
    data.append('pollUniqId', urlPoll)

    const result = await callFetch(`${domain}/polls/rate`, 'POST', data)

    if(result.result){

      Swal.fire(
        'Se envió correctamente!',
        'Gracias por su calificación!',
        'success'
      ).then(()=>{

        const ratePollContainer = document.querySelector('.rate-poll-container')

        ratePollContainer.innerHTML = '<p class="rated-message">Gracias por su calificación</p>'

      })

    }

  }else{
    Swal.fire(
      'Error!',
      'Debes seleccionar una calificación para enviarla!',
      'error'
    )
  }

})