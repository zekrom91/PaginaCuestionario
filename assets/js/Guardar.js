function guardar(){
    db.collection("Usuarios").add({
        nombre: document.getElementById("nombre_completo").value,
        numero: document.getElementById("n_control").value,
        correo: document.getElementById("correo").value,
        usuario: document.getElementById("usuario").value,
        contrasena: document.getElementById("contrasena").value,
})
    .then((docRef) => {
        alert("registro exitoso")
})
    .catch((error) => {
        alert("Error en el registro");
});
}