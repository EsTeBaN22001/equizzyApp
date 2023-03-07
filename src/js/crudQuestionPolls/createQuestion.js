const createQuestionButton = document.querySelector('.create-question-button')

createQuestionButton.addEventListener('click', function () {
  Swal.fire({
    title: 'Crear nueva pregunta',
    input: 'text',
    inputLabel: 'Ingrese su pregunta aquí:',
    inputPlaceholder: 'Escriba su pregunta aquí',
    showCancelButton: true,
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Crear',
    confirmButtonColor: "#00c9ac",
    inputValidator: (value) => {
      if (!value) {
        return "Este campo no puede estar vacío"
      }
    }
  }).then( async response => {

    if (response.isConfirmed) {
      const data = new FormData();
      data.append('name', response.value)
      data.append('idPoll', urlPoll)

      // Variable para guardar el nombre de la pregunta
      let nameQuestion = response.value

      //Llamada a la función que realiza el fetch
      const result = await callFetch(`${domain}/questions/create`, 'POST', data)
      
      if (result.response) {
        Swal.fire({
          icon: 'success',
          title: 'Correcto!',
          text: 'La pregunta se creó correctamente!'
        }).then(()=>{
          location.reload()
        })
      }
    }

  })
})