
// selecciona toda las clases del boton descargar
var botonDescargar = document.querySelectorAll(".descargar");


botonDescargar.forEach((button) => {
    button.addEventListener("click", () => {
        botonDescargar.forEach((button) => {
            // elimoma toda las clases del boton descargar
            button.classList.remove("descargar");
        });
        // asigna clase a la etiqueta o boton descargar, solo al boton que se realizo el clic
        button.classList.toggle("descargar");
        var contador = 1
        enviarController(contador)
    });
});



 function enviarController(contador){

    // enviar peticion al routes/api.php
    axios.get('api/contarDescarga').then(res => {

        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Descarga realizada',
            showConfirmButton: false,
            timer: 1500
          }).then(okay => {
            if (okay) {
                location.reload();
            }
        });

    }).catch(err => console.log(err))

}

// enviar peticion al routes/api.php
const cantDescarga = async function(){

     axios.get('api/mostrarCanDescarga').then(res => {

        document.querySelector("#num").innerHTML  = res.data;

    }).catch(err => console.log(err))

}


cantDescarga();  