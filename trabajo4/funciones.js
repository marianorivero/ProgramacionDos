function boton() {
    let arreglo = [99, 4, 34, 93, 1];
    
    arreglo.sort(function(a, b){return a - b});//ordenar
    arreglo.forEach(elemento => console.log(elemento))

    console.log("");

    arreglo.forEach(function(elemento){//mostrar mayores a 50
        if (elemento > 50) {
            console.log(elemento);
        }

    })
    
    console.log("");

    arreglo.forEach(function(elemento){ //mostrar solo los pares
        if ((elemento %2) == 0) {
            console.log(elemento);
        }

    })
}




