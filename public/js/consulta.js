var botones = document.querySelectorAll('.btnEliminar');

botones.forEach(boton => {
    boton.addEventListener('click', async () => {
        
        const pelicula = boton.dataset.pelicula;
        let respuesta = await httpRequest('http://localhost/aprendiendomvc/consulta/eliminarPelicula/' + pelicula)

        const mensaje = document.getElementById('mensaje');

        if(respuesta.ok){

            const tbody = document.querySelector('#tbody-peliculas');
            const fila = document.querySelector('#fila-' + pelicula);
                        
            mensaje.classList.add('success');
            mensaje.innerText = respuesta.mensaje;
        
            tbody.removeChild(fila);
        } else{

            mensaje.classList.add('error');
            mensaje.innerText = respuesta.mensaje;
        }
    });
});

async function httpRequest(url){

    let response = await fetch(url);
    let data = await response.json();

    return data;
}