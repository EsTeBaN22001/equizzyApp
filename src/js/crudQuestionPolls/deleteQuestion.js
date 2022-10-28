const deleteButtons = document.querySelectorAll('.delete-question')

deleteButtons.forEach(button => {
  
  button.addEventListener('click', function(){

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
    }).then((result) => {
      if (result.isConfirmed) {
        const result = callFetch('http://localhost:3000/questions/delete', 'POST', data)

        result.then((res)=>{
          if (res.response) {
            Swal.fire({
              icon: 'success',
              title: 'Correcto!',
              text: 'La pregunta se eliminó correctamente!'
            }).then(()=>{
              location.reload()
            })
          }
        })
      }
    })

  })

});