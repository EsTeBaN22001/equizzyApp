// OCULTAR ALERTAS DE TIPO "SUCCESS" DESPUÉS DE CIERTO TIEMPO

if(document.querySelector('.alert.success')){

  const alert = document.querySelector('.alert.success')

  setTimeout(()=>{
    alert.remove()
  }, 5000)

}