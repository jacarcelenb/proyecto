const botonEnviar = document.getElementById("enviar");


botonEnviar.addEventListener('click', function (e) {
    e.preventDefault();
    const nombre = document.getElementById("nombre").value;
    const correo = document.getElementById("correo").value;
    const asunto = document.getElementById("asunto").value;
    const mensaje = document.getElementById("mensaje").value;
    window.location.href = `mailto:asamblea_imbaburarenacientee@hotmail.com?
    subject=${asunto}&body=Nombre%0A${nombre}Correo%0A${correo}Mensaje%0A${mensaje}`;
})