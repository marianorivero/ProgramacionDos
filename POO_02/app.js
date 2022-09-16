const inputArancel = document.getElementById("inputArancel")
const tipoDinamico = document.getElementById("tipoDinamico")



//Select dinamico
const TIPO =["Alumno","Docente"];
TIPO.forEach(item => {
    tipoDinamico.innerHTML += `<option value="${item}">${item}</option>`
})
tipoDinamico.addEventListener('change', function(){
    switch (tipoDinamico.value) {
        case "Alumno":
            inputArancel.innerHTML= `Arancel: <input type="number" name="arancel" value=500 readonly="readonly"> <br><br>`;
            
            break;
    
        case "Docente":
            inputArancel.innerHTML= `Arancel: <input type="number" name="arancel" value=1000 readonly="readonly"><br><br>`;
    
            break;
    }
})
