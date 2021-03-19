
var botonDescargar = document.querySelectorAll(".descargar");

botonDescargar.forEach((button) => {
    button.addEventListener("click", () => {
        botonDescargar.forEach((button) => {
            button.classList.remove("descargar");
        });
        button.classList.toggle("descargar");
        var contador = 1
        enviarController(contador)
    });
});

window.addEventListener('DOMContentLoaded', () => {

    cantDescarga();  
  
})

 function enviarController(contador){

    axios.get('api/contarDescarga').then(res => {

        location.reload();

        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Descarga realizada',
            showConfirmButton: false,
            timer: 1500
          })

    }).catch(err => console.log(err))

}

    const cantDescarga = async () => {

    axios.get('api/mostrarCanDescarga').then(res => {

        document.querySelector("#num").innerHTML = res.data

    }).catch(err => console.log(err))

}


