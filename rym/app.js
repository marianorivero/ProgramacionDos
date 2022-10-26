const FORM = document.getElementById("form");
const NUMEROID = document.getElementById("numeroId");
let mostrar= document.getElementById("mostrar");
let formulario = document.getElementById("formulario");

FORM.addEventListener("submit", function(e){
    e.preventDefault();

    //results es un arreglo, la posicion 0 corresponde al id 1, por eso se le resta 1
    id = (NUMEROID.value)-1;

    if (id>=0 && id<=19) {
        fetch('https://rickandmortyapi.com/api/character')
        .then(res => res.json())
        .then(data => {
            console.log(data);
    
            mostrar.innerHTML=`
            <img src="${data.results[id].image}" alt="Error"> <br>
            <b>ID:</b> ${data.results[id].id}<br>
            <b>Nombre:</b> ${data.results[id].name} <br>
            <b>Especie:</b> ${data.results[id].species} <br>
            <b>Estado:</b> ${data.results[id].status}<br>
            `;

            formulario.innerHTML = `
            <form action="conexion.php" method="POST">
            ID: <input type="number" name="id" value=${data.results[id].id} readonly>
            Nombre: <input type="text" name="nombre" value=${data.results[id].name} readonly>
            Especie: <input type="text" name="especie" value=${data.results[id].species} readonly>
            Estado: <input type="text" name="estado" value=${data.results[id].status} readonly>
            <input type="submit" value="Enviar">
            </form>
            `;
        })
    } else {
        mostrar.innerHTML=`<b>ID incorrecto: coloque un ID de 1 a 20</b>`;
    }

})