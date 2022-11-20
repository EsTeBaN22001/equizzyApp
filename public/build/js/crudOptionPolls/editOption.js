const optionsList = document.querySelector('ul.options-list')

optionsList.addEventListener('click', function(e){
  
  if(e.target.classList.contains('edit-button')){
    
    const option = getParentElementByClass(e.target, 'option')
    const idOption = option.dataset.id
    let nameOption = option.firstElementChild.textContent

    Swal.fire({
      title: 'Editar opción',
      input: 'text',
      inputValue: nameOption,
      inputLabel: 'Editar el contenido de la opción seleccionada:',
      inputPlaceholder: 'Escriba su edición aquí',
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
        
        const data = new FormData()
        data.append('name', res.value)
        data.append('idOption', idOption)

        const result = callFetch(`${domain}/options/edit`, 'POST', data)

        result.then((response)=>{

          if(response.response){

            option.firstElementChild.textContent =  response.option.name

          }

        })

      }

    })

  }

})