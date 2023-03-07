function createOption(e){

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
    }).then( async (res)=>{
      
      if(res.isConfirmed){

        const question = getParentElementByClass(e.target, 'question')
        const questionId = question.dataset.idquestion
        
        const data = new FormData()
        data.append('name', res.value)
        data.append('questionId', questionId)
        
        const result = await callFetch(`${domain}/options/create`, 'POST', data)

        if(result.response){
          let questionElement = question
          let optionName = result.option.name
          let optionId = result.result.id

          addOptionDOM(questionElement, optionName, optionId)

          if(document.querySelector('p.no-option-text')){
            const noOption = document.querySelector('p.no-option-text')
            noOption.remove()
          }
        }

      }

    })

  }

}