function traer() {
    let div = document.getElementById("div");

    fetch('https://randomuser.me/api')
    .then(res=>res.json())
    .then(data=>{

        div.innerHTML = `
        Nombre: ${data.results[0].name.first} <br>
        Apellido: ${data.results[0].name.last} <br>
        Sexo: ${data.results[0].gender} <br>
        Edad: ${data.results[0].dob.age} <br><br>
        <img src="${data.results[0].picture.large}" alt="Error">
        `
    })
}
