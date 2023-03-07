const charCounter = document.querySelector('span.char-counter')
const textarea = document.querySelector('textarea.char-to-count')

let count = 0
charCounter.textContent = count

textarea.addEventListener('input', function(e){
  const textareaLength = textarea.value.length

  count = textareaLength
  charCounter.textContent = count

  if(count < 0 || count > 500){
    charCounter.classList.add('error')
    count = 500
  }else{
    charCounter.classList.remove('error')
  }

})