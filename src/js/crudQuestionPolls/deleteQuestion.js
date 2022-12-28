const deleteButtons = document.querySelectorAll('.delete-question')

deleteButtons.forEach(button => {

  button.addEventListener('click', function () {

    const idQuestion = button.dataset.idquestion

    const data = new FormData()
    data.append('idQuestion', idQuestion)

    Swal.fire({
      title: 'Estás seguro/a?',
      text: "Si se borra no hay manera de recuperar la información",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Borrar',
      cancelButtonText: 'Cancelar'
    }).then( async result => {
      if (result.isConfirmed) {

        const result = await callFetch(`${domain}/questions/delete`, 'POST', data)

        if (result.response) {
          Swal.fire({
            icon: 'success',
            title: 'Correcto!',
            text: 'La pregunta se eliminó correctamente!'
          }).then(() => {
            setTimeout(() => {
              const question = document.querySelector(`div.question[data-idquestion="${idQuestion}"]`)
              question.remove()
            }, 200);
          })
        }
      }
    })

  })

});