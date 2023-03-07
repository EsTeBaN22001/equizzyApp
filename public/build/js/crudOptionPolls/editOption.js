function editOption(e){
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
  }).then( async res => {

    if (res.isConfirmed) {

      const data = new FormData()
      data.append('name', res.value)
      data.append('idOption', idOption)

      const result = await callFetch(`${domain}/options/edit`, 'POST', data)

      if (result.response) {

        option.firstElementChild.textContent = result.option.name

      }

    }

  })
}