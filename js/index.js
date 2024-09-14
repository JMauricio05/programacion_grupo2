// document.addEventListener('DOMContentLoaded',()=>{
//     console.log(document.getElementById('titulo'));
// });

// document.getElementById('titulo').innerText = 'Hola <strong>Pepe</strong>';
document.getElementById("titulo").innerHTML = "Hola <strong>Pepe</strong>";
// document.getElementById('titulo').textContent = 'Hola Pepe';
console.log(document.getElementById("titulo").textContent);
const titulo = document.getElementById("titulo");

titulo.style.color = "#ff0000";
titulo.style.textAlign = "center";
titulo.style.fontSize = "24px";
titulo.classList.add("ocultar");
titulo.classList.add("mostrar");
titulo.classList.remove("ocultar");

const saludar = () => {
  const msg = document.getElementById("msg");
  //   msg.innerHTML = '<p>Hola Juanita</p>';
  msg.innerHTML = "";
  const msgP = document.createElement("p");
  msgP.textContent = "Hola Juanita";
  msgP.style.color = "#0000ff";

  const eliminarBtn = document.createElement("button");
  eliminarBtn.textContent = "Eliminar";
  eliminarBtn.addEventListener('click',()=>{
    // msg.innerHTML = "";
    msgP.remove();
    eliminarBtn.remove();
  });

  msg.appendChild(msgP);
  msg.appendChild(eliminarBtn);
};

document.getElementById("saludarBtn").addEventListener("click", () => {
  saludar();
});
