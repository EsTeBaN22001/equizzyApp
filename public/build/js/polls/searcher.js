if(document.querySelector('#search')){

  
  // Contenedor padre del siteContent
  const mainContent = document.querySelector('.mainContent')
  
  // Contenedor en el que se muestra todo el contenido del sitio
  const siteContent = document.querySelector('.content')


  
  const search = document.querySelector('#search')

  search.addEventListener('keyup',async e =>{
    
    // Ocultar el contenido del sitio
    siteContent.style.display = 'none'
    
    const data = new FormData()
    data.append('searchContent', search.value)

    const result = await callFetch(`${domain}/polls/search`, 'POST', data)

    // Creación del DOM para mostrar los resultados de la búsqueda
    const pollsContainer = document.createElement('div')
    pollsContainer.classList.add('container-sm', 'section', 'polls-container')
    
    if(result != "no-result-search"){
      // Recorrer el array con todas las encuestas y agregarlas al DOM
      result.forEach( poll => {

        // Crear el DOM de las encuestas
        const pollContainer = document.createElement('div')
        pollContainer.classList.add('poll')

        // Link contenedor de la encuesta
        const pollLink = document.createElement('a')
        pollLink.classList.add('poll-link')
        pollLink.href = `${domain}/polls/respond?poll=${poll.uniqId}`

        // Contendor de la imagen
        const imgContainer = document.createElement('div')
        imgContainer.classList.add('img-container')

        const img = document.createElement('img')
        img.src = `/pollsImages/${poll.img}`

        imgContainer.appendChild(img)

        // Contendor del título y categoría de la encuesta
        const aboutPollContainer = document.createElement('div')
        aboutPollContainer.classList.add('about-poll')

        const pollTitle = document.createElement('h3')
        pollTitle.textContent = poll.title

        aboutPollContainer.appendChild(pollTitle)

        pollLink.appendChild(imgContainer)
        pollLink.appendChild(aboutPollContainer)

        pollContainer.appendChild(pollLink)

        pollsContainer.appendChild(pollContainer)

      })
    }else{

      const noResultParagraph = document.createElement('p')
      noResultParagraph.classList.add('no-result-search')
      noResultParagraph.textContent = "No hay coincidencias"

      // Remover el párrafo anterior para evitar que se dupliquen
      const previousNoResultParagraph = mainContent.querySelector('.no-result-search')

      if(previousNoResultParagraph) previousNoResultParagraph.remove()
      
      mainContent.appendChild(noResultParagraph)

    }
    
    // Eliminar el contenedor anterior para evitar que se dupliquen
    const previousPollsContainer = mainContent.querySelector('.polls-container')

    if(previousPollsContainer) previousPollsContainer.remove()

    mainContent.appendChild(pollsContainer)


  })

  search.addEventListener('blur', function(){
    
    setTimeout(() => {
      siteContent.style.display = 'inline-block'
    }, 500);

  })

}