const domain="http://equizzy.epizy.com",urlPoll=getIdToUrl().poll??"",actualUserJwt=getIdToUrl().t??"",storage=window.localStorage;function getIdToUrl(){const t=new URLSearchParams(window.location.search);return Object.fromEntries(t.entries())}async function callFetch(t,e,n){try{const o=await fetch(t,{method:e,headers:{Authorization:storage.getItem("jwt")},body:n}),a=await o.json();if("error"!=a)return a;Swal.fire("Su sesión caducó!","Si quiere realizar esta acción cierre sesión e inicie nuevamente","error")}catch(t){console.log(t)}}function ocultActiveMenus(){document.querySelectorAll(".options-container.active").forEach(t=>{t.classList.remove("active")})}function getParentElementByClass(t,e){let n=t;for(;n&&!n.classList.contains(e);)n=n.parentElement;return n}function addOptionDOM(t,e,n){const o=t.firstElementChild.nextElementSibling.firstElementChild.nextElementSibling;document.createElement("hr").classList.add("separator");const a=document.createElement("li");a.classList.add("option"),a.dataset.id=n;const i=document.createElement("p");i.classList.add("name-option"),i.textContent+=""+e;const c=document.createElement("div");c.classList.add("option-actions");const s=document.createElement("button");s.classList.add("option-button","edit-button"),s.textContent="Editar";const r=document.createElement("button");r.classList.add("option-button","delete-button"),r.textContent="Eliminar",c.appendChild(s),c.appendChild(r),a.appendChild(i),a.appendChild(c),o.appendChild(a)}""!=actualUserJwt&&storage.setItem("jwt",actualUserJwt);