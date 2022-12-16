//Contenedor de todas las respuestas
const answersContainer = document.querySelector('.answers-container')

const data = new FormData()
data.append('uniqId', urlPoll)

const result = callFetch(`${domain}/polls/get-answers`, 'POST', data)

result.then((answers)=>{
  
  // Obtiene las claves del objeto answers
  let keys = Object.keys(answers)
  
  // Recorre todas las answers
  for (let i = 0; i < keys.length; i++) {
    
    let question = keys[i];
    let options = answers[question]

    // Container de la respuesta
    const answerContainer = document.createElement('div')
    answerContainer.classList.add('answer-container', 'section-sm')

    // Título de la respuesta
    const answerTitle = document.createElement('h3')
    answerTitle.classList.add('answer-title')

    answerTitle.textContent = question

    // Canvas de la respuesta
    const canvasEl = document.createElement('canvas')
    canvasEl.setAttribute('id', `canvas${i}`)

    // Añadir el título y el canvas al answerContainer
    answerContainer.appendChild(answerTitle)
    answerContainer.appendChild(canvasEl)

    // Añadir la respuesta al contenedor de respuestas
    answersContainer.appendChild(answerContainer)

    const canvas = document.getElementById(canvasEl.id)

    new Chart(canvas, {
      
      type: 'bar',
      data: {
        labels: Object.keys(options),
        datasets: [{
          label: 'N° de votos',
          data: Object.values(options),
          borderWidth: 2,
          borderColor: '#0084D1',
          backgroundColor: '#0084D160'
        }]
      },
      options: {
        indexAxis: 'y',
        scales: {
          y: {
            ticks: {
              min: 0,
              max: Object.keys(options).length,
              stepSize: 1
            }
          }
        },
        plugins: {
          title: 'Nuevo título'
        }
      }
    });
    
  }

})