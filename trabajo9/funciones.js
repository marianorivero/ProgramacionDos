function traer() {
    let div = document.getElementById("div");

    fetch('https://randomuser.me/api')
    .then(res=>res.json())
    .then(data=>{

        if (data.results[0].gender=="female" && data.results[0].dob.age>19 && data.results[0].dob.age<41) {
            div.innerHTML = `
            Nombre: ${data.results[0].name.first} <br>
            Apellido: ${data.results[0].name.last} <br>
            Sexo: ${data.results[0].gender} <br>
            Edad: ${data.results[0].dob.age} <br>
            Latitud: ${data.results[0].location.coordinates.latitude}<br>
            Longitud: ${data.results[0].location.coordinates.longitude}<br><br>
            <img src="${data.results[0].picture.large}" alt="Error"><br>
            `


            var map = L.map('map').setView([data.results[0].location.coordinates.latitude, data.results[0].location.coordinates.longitude], 13);

            L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{
                attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
                maxZoom: 18
            }).addTo(map);
  
        } else {
            div.innerHTML = "No existe el usuario"
        }
    })
}
