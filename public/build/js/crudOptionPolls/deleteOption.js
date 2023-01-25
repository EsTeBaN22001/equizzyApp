function deleteOption(e){
  Swal.fire({
    title: 'Estás seguro/a?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Si',
  }).then( async result => {

    if (result.isConfirmed) {

      const option = getParentElementByClass(e.target, 'option')
      const idOption = option.dataset.id

      const data = new FormData();
      data.append('idOption', idOption);

      const result = await callFetch(`${domain}/options/delete`, 'POST', data)

      if (result.response) {

        option.remove()

      }

    }

  })
}