const contactoEliminarModal = document.getElementById("contactoEliminarModal");
const closeBtnModal =
  contactoEliminarModal.getElementsByClassName("closeBtn")[0];
const notBtnModal = contactoEliminarModal.getElementsByClassName("notBtn")[0];
const contactoForm = document.forms["contactoForm"];

const eliminarContacto = (id) => {
  const codInput = contactoForm["cod"];
  codInput.value = id;
  contactoEliminarModal.classList.remove("ocultarModal");
};

const cerrarModal = () => {
  contactoEliminarModal.classList.add("ocultarModal");
};

closeBtnModal.addEventListener("click", () => cerrarModal());
notBtnModal.addEventListener("click", () => cerrarModal());
