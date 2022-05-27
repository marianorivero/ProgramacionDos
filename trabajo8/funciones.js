function inicializar(){
    var container = L.DomUtil.get('map');
    if(container != null){
        container._leaflet_id = null;
    }
}

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
            `;

            var latitud = data.results[0].location.coordinates.latitude
            var longitud= data.results[0].location.coordinates.longitude

            //Uso Leaflet

            inicializar()
            var map = L.map('map')
            map.setView([latitud, longitud], 13);
            
            L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                maxZoom: 18
            }).addTo(map);
            
            L.control.scale().addTo(map);
            L.marker([latitud, longitud], {draggable: true}).addTo(map);

        } else {
            div.innerHTML = `
            Nombre:<br>
            Apellido:<br>
            Sexo:<br>
            Edad:<br>
            Latitud:<br>
            Longitud:<br><br>
            `
        }
    })
}
