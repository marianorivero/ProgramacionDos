// Capturo el select y el div(este div contendra las respuestas del select dinamico)
let puesto = document.getElementById('puesto');
let div = document.getElementById('div');




// Constante que contiene los valores de los options del select en el index
const PUESTOS = ["Repartidor","Comercial"]

// Se cargan los option en el select
PUESTOS.forEach(item => {
    puesto.innerHTML += `<option value="${item}">${item}</option>`
})




// Creo un evento al select y cargo un nuevo input segun este cambie su estado
puesto.addEventListener("change", () => {
    switch (puesto.value) {
        case "Repartidor":
            div.innerHTML=`Zona: <input type="text" name="x" require><br><br>`
        break;
        
        case "Comercial":
            div.innerHTML=`Comision: <input type="number" name="x" require><br><br>`
        break;
    }
})
