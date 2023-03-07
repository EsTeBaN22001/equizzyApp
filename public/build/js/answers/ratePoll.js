// Variable para saber que calificación le dió el usuario
let starId = null

// Verificar si el usuario actual ya calificó esta encuesta y si no darle la opción de calificar
window.addEventListener('DOMContentLoaded', async ()=>{

  const data = new FormData();
  data.append('pollUniqId', urlPoll)

  const result = await callFetch(`${domain}/polls/verify-rate`, 'POST', data)

  if(result.isRated){

    const ratePollContainer = document.querySelector('.rate-poll-container')
    ratePollContainer.innerHTML = '<p class="rated-message">Ya calificó esta encuesta</p>'

  }else{

    // Colorea las estrellas según se le den click
    const starsWidget = document.querySelector('.stars-widget')

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

  }

})


// Envía la calificación al back-end

const rateButton = document.querySelector('.rate-button')

rateButton.addEventListener('click', async ()=> {

  if(starId){
    
    const data = new FormData()
    data.append('rate', starId)
    data.append('pollUniqId', urlPoll)

    const result = await callFetch(`${domain}/polls/rate`, 'POST', data)

    if(await result.result){

      Swal.fire(
        'Se envió correctamente!',
        'Gracias por su calificación!',
        'success'
      ).then(()=>{

        const ratePollContainer = document.querySelector('.rate-poll-container')

        ratePollContainer.innerHTML = '<p class="rated-message">Gracias por su calificación</p>'

      })

    }else{

      Swal.fire(
        'Error!',
        'Hubo un error al enviar la calificación!',
        'error'
      )

    }

  }else{
    Swal.fire(
      'Error!',
      'Debes seleccionar una calificación para enviarla!',
      'error'
    )
  }

})

