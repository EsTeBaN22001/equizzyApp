if(document.querySelector(".polls-container")){document.querySelectorAll(".poll").forEach(e=>{document.querySelector(".polls-container").addEventListener("click",(function(e){if(console.log(e.target),"menu-button"!=e.target.classList){document.querySelectorAll(".options-container").forEach(e=>{e.classList.remove("active")})}}));let t=e.lastElementChild.childNodes[3];t.addEventListener("click",(function(){document.querySelectorAll(".options-container").forEach(e=>{e.classList.remove("active")});const e=t.nextElementSibling;e.classList[1]?e.classList.remove("active"):e.classList.add("active")}))})}