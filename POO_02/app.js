const inputArancel = document.getElementById("inputArancel")
const tipoPersona = document.getElementById("tipoPersona")

//Select dinamico
const TIPO =["Alumno","Docente"];
TIPO.forEach(item => {
    tipoPersona.innerHTML += `<option value="${item}">${item}</option>`
})


tipoPersona.addEventListener('change', function(){
    switch (tipoPersona.value) {
        case "Alumno":
            inputArancel.innerHTML= `Arancel: <input type="number" name="arancel" value=500 readonly> <br><br>`;
        break;
    
        case "Docente":
            inputArancel.innerHTML= `Arancel: <input type="number" name="arancel" value=1000 readonly><br><br>`;
        break;
    }
})
