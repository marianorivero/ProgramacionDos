let socios = [
    {
        apellido: 'Parra',
        nombre: 'Javier',
        edad: 41,
        facturas: 1,
        dni: 28358603
    },
    {
        apellido: 'Gustavo',
        nombre: 'Fernandez',
        edad: 40,
        facturas: 6,
        dni: 1
    },
    {
        apellido: 'Marcelo',
        nombre:'Perez',
        edad: 19,
        facturas: 3,
        dni: 2
    },
    {
        apellido: 'Pedro',
        nombre:'Nandez',
        edad: 37,
        facturas: 20,
        dni: 3
    },
    {
        apellido:'Gloria',
        nombre: 'Pascual',
        edad: 26,
        facturas: 7,
        dni: 4
    }
]


//funcion del boton
function enviar() {
    let dni = document.getElementById("dni").value
    let datos;

    socios.forEach(element => {
       if (element.dni == dni) {
        datos = element //si hay coincidencia guardo los datos en un nuevo objeto
       }
    });

    if (datos==undefined) { //si el resultado del objeto esta indefinido (sin coincidencia) se pinta
        div.style.backgroundColor = "red";
        div.innerHTML= ` No existe`
    }else{ //si hay coincidencia se pregunta por la cantidad de facturas y se pintan los datos
        if(datos.facturas<3){
            pintar(datos.nombre,datos.apellido, datos.facturas, "green");
        }
    
        if(datos.facturas>3 && datos.facturas<6){
            pintar(datos.nombre,datos.apellido, datos.facturas, "yellow")
        }
    
        if(datos.facturas>6){
            pintar(datos.nombre,datos.apellido, datos.facturas, "red")
        }
    }
}

// pinto en el div
function pintar(nombre,apellido,facturas,color) {
    div.style.backgroundColor = color;
    div.innerHTML= `
    Nombre: ${nombre} ${apellido}<br>
    Facturas: ${facturas}
    `
}


/*
CONSIGNA: se necesita buscar por DNI si el socio existe, en caso contrario
mostrar en rojo NO EXISTE (bloque completo). Si existe, evaluar lo siguiente:
- Si tiene menos de 3 facturas mostrar en verde
- mas de 3 y menos de 6 mostrar en amarillo
- mas de 6 mostrar en rojo
mas nombre y cantidad de facturas
*/
