const DOMAIN_URL = "http://127.0.0.1:8000/api";
const contactoForm = document.forms["contactoForm"];
const tabla = document.getElementById("contactos");
let contactos = [];

const cargarContactos = () => {
  fetch(`${DOMAIN_URL}/app/contactos`)
    .then((response) =>
      response.status == 404 ? alert("Error en el servicio") : response.json()
    )
    .then((body) => {
      contactos = body.data;
      const tbody = tabla.getElementsByTagName("tbody")[0];
      tbody.innerHTML = "";
      contactos.forEach(contacto => {
        const tr = document.createElement('tr');

        const tdNombre = document.createElement('td');
        tdNombre.textContent = contacto.nombre;
        const tdEmail = document.createElement('td');
        tdEmail.textContent = contacto.email;
        const tdTelefono = document.createElement('td');
        tdTelefono.textContent = contacto.telefono;

        tr.appendChild(tdNombre);
        tr.appendChild(tdEmail);
        tr.appendChild(tdTelefono);
        tbody.appendChild(tr);
      });
    })
    .finally(() => console.log("Respuesta del servicio fin"));
};

cargarContactos();

console.log(contactos);

contactoForm.addEventListener("submit", (e) => {
  e.preventDefault();
  fetch(`${DOMAIN_URL}/app/contacto`, {
    method: "post",
    body: JSON.stringify({
      nombre: contactoForm["nombre"].value,
      email: contactoForm["email"].value,
      telefono: contactoForm["telefono"].value,
    }),
    headers: {
      "content-type": "application/json",
    },
  }).then(()=>{
    cargarContactos();
  });

});
