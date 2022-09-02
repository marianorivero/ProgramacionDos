const PUESTOS = ["-","Repartidor","Comercial"]

let puesto = document.getElementById('puesto');
let div = document.getElementById('div');

PUESTOS.forEach(item => {
    puesto.innerHTML += `<option value="${item}">${item}</option>`
})


puesto.addEventListener("change", function () {

    switch (puesto.value) {
        case "Repartidor":
            div.innerHTML=`Zona <input type="text" name="x"><br><br>`
            break;
        
        case "Comercial":
            div.innerHTML=`Comision <input type="number" name="x"><br><br>`
            break;

        case "-":
            div.innerHTML= ``
            break;
    }
})
