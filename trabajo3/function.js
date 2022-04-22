function sumar () {
    let a = Number(document.getElementById("a").value)
    let b = Number(document.getElementById("b").value)
    let resultado = a+ b
    console.log(resultado); 
}



function mayor() {
    let a = Number(document.getElementById("a").value)
    let b = Number(document.getElementById("b").value)
    if (a>b) {
        alert(`El primer valor es mayor: ${a}`)
    } else {
        if (b>a) {
            alert(`El segundo valor es mayor: ${b}`)      
        }else{
            alert("Los numeros son iguales")
        }
    }
}




function sumar2 () {
    let a = Number(document.getElementById("a").value)
    let b = Number(document.getElementById("b").value)
    let div = document.getElementById("div")

    let resultado = a+ b

    div.textContent = `Resultado: ${resultado}`
}

