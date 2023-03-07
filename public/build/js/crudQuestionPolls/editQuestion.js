function editQuestion(button){

  const idQuestion = button.dataset.idquestion

  const data = new FormData()
  data.append('idQuestion', idQuestion)

  let question = callFetch(`${domain}/questions/get`, 'POST', data)

  question.then((res) => {

    if (res) {
      const questionName = res.name
      Swal.fire({
        title: 'Editar pregunta',
        input: 'text',
        inputLabel: 'Ingrese su pregunta aquí:',
        inputPlaceholder: 'Escriba su pregunta aquí',
        inputValue: questionName,
        showCancelButton: true,
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Crear',
        confirmButtonColor: "#00c9ac",
        inputValidator: (value) => {
          if (!value) {
            return "Este campo no puede estar vacío"
          }
        }
      }).then( async res => {
        if (res.isConfirmed) {

          const newQuestionName = res.value

          const data = new FormData()
          data.append('id', idQuestion)
          data.append('name', newQuestionName)

          const result = await callFetch(`${domain}/questions/update`, 'POST', data)

          if(result.response){

            Swal.fire(
              'Correcto!',
              'Se actualizó la pregunta correctamente!',
              'success'
            ).then(()=>{

              const oldNameQuestion = document.querySelector(`h3[data-namequestion="${questionName}"]`)
              
              setTimeout(() => {
                oldNameQuestion.textContent = newQuestionName
                ocultActiveMenus()
              }, 200);

            })

          }else{

            Swal.fire(
              'Incorrecto',
              'Algo salió mal!',
              'error'
            )

          }

        }
      })
    }

  })
}