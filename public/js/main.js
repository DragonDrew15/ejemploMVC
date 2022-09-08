// console.log("Ejecutando js");
const url = "http://localhost/ejemploMVC/";

const botones = document.querySelectorAll(".bEliminar");

botones.forEach(boton => {

    boton.addEventListener("click", function(){
        // console.log("Puchurraste un Boton");
        const user_id = this.dataset.user_id;
        const confirm = window.confirm("Deseas eliminar al usuario con ID " + user_id + "?");
        if(confirm){
            //Solicitud AJAX
            httpRequest(url + "consulta/eliminarUsuario/" + user_id, function(){
                // console.log(this.responseText);
                document.querySelector("#respuesta").innerHTML = this.responseText;

                const tbody = document.querySelector("#tbody-usuarios");
                const fila = document.querySelector("#fila-" + user_id);

                tbody.removeChild(fila);
            });
        }else{

        }
    });
});

function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
}