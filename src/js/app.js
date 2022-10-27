// FUNCIONES HELPERS

// Función que obtiene el uniqId de la encuesta en el parámetro GET de la URL
function getIdToUrl() {
  const params = new URLSearchParams(window.location.search)
  const param = Object.fromEntries(params.entries())
  return param
}