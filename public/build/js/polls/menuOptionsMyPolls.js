const allMenuButtons=document.querySelectorAll(".menu-button");allMenuButtons.forEach(t=>{t.addEventListener("click",(function(e){t.nextElementSibling.classList.toggle("active")}))});