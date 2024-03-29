const visibilityButton = document.querySelector('.visibility-poll-button')
let pollState

getPublicState().then(state => {

  pollState = state

  // Obtener el estado de la encuesta y asignarle el color al boton
  if(state == 1){
    visibilityButton.classList.add('public')
    visibilityButton.textContent = 'Público'
  }else{
    visibilityButton.classList.add('private')
    visibilityButton.textContent = 'Privado'
  }
})




visibilityButton.addEventListener('click', async ()=>{

  const data = new FormData()
  data.append('pollId', urlPoll)
  data.append('state', pollState)

  const result =  await callFetch(`${domain}/polls/set-public-state`, 'POST', data)

  pollState = result
  // Obtener el estado de la encuesta y asignarle el color al boton
  if(result == 1){
    visibilityButton.classList.remove('private')
    visibilityButton.classList.add('public')
    visibilityButton.textContent = 'Público'
  }
  if(result == 0){
    visibilityButton.classList.remove('public')
    visibilityButton.classList.add('private')
    visibilityButton.textContent = 'Privado'
  }

})


async function getPublicState(){

  const data = new FormData()
  data.append('pollId', urlPoll)

  const state = await callFetch(`${domain}/polls/get-public-state`, 'POST', data)
    
  return state

}