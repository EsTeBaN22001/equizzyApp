optionsList.addEventListener('click', function(e){

  if(e.target.classList.contains('delete-button')){
    
    Swal.fire({
      title: 'Estás seguro/a?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Si',
    }).then((result) => {

      if (result.isConfirmed) {

        const option = getParentElementByClass(e.target, 'option')
        const idOption = option.dataset.id
        
        const data = new FormData();
        data.append('idOption', idOption);

        const result = callFetch(`${domain}/options/delete`, 'POST', data)

        result.then((response)=>{

          if(response.response){

            option.remove()

          }

        })
        
      }
      
    })

  }

})