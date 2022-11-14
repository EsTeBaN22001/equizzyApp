const questionsContainer = document.querySelector('.questions-container')

questionsContainer.addEventListener('click', function(e){
  
  if(e.target.classList.contains('add-option-button')){

    Swal.fire({
      title: 'Crear nueva opción',
      input: 'text',
      inputLabel: 'Ingrese la opción que quiere añadir a continuación:',
      inputPlaceholder: 'Escriba su opción aquí',
      showCancelButton: true,
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Crear',
      confirmButtonColor: "#00c9ac",
      inputValidator: (value) => {
        if (!value) {
          return "Este campo no puede estar vacío"
        }
      }
    }).then((res)=>{
      
      if(res.isConfirmed){

        const questionId = getParentElementByClass(e.target, 'question').dataset.idquestion
        
        const data = new FormData()
        data.append('name', res.value)
        data.append('questionId', questionId)
        
        const result = callFetch(`${domain}/options/create`, 'POST', data)

        result.then((response)=>{
          
          if(response.response){
            Swal.fire({
              icon: 'success',
              title: 'Correcto!',
              text: 'La opción se creó correctamente!'
            }).then(()=>{
              location.reload()
            })
          }

        })

      }

    })

  }

})