let libros = [
    {id:1,
    autor:"Mark Twain",
    titulo: "Flor",
    stock: 2,
    color:"azul",
    valor: 100,
    editorial:"La Flor"},

    {id:2,
    autor:"Jorge Alberto",
    titulo:"Zeus",
    stock: 13,
    color: "Verde",
    valor: 100,
    editorial: "Perla"},

    {id:3,
    autor: "Pedri",
    titulo:"La segunda",
    stock: 1,
    color: "Violeta",
    valor:45,
    editorial:"Olivia"},

    {id:4,
    autor:"Miguel Gutierrez",
    titulo:"Anoche",
    stock:444,
    color:"Gris",
    valor: 500,
    editorial: "Julieta"},

    {id:5,
    autor:"Fabiola Jr.",
    titulo: "HITACHI",
    stock: 222,
    color: "rojo",
    valor: 600,
    editorial: "Genius"},

]
let div = document.getElementById("div")
let div2 = document.getElementById("div2")

function buscar() {
    const id = document.getElementById("id").value
    const veinte = 0.2 ;
    const cinco = 0.05;
    let datos;
    let descuento = 0;

    libros.forEach(element => {
       if (element.id == id) {
        datos = element
       }
    });


    if (datos==undefined) {
        div.style.backgroundColor = "red";
        div.innerHTML= ` No existe`
    }else{ 
        if(datos.valor<=5){
            //si el stock es menor o igual 5 mostrar el div en rojo, si no mostrar en verde
            mostrar(datos,"red");
            
        }else{
            mostrar(datos,"green")
        }
    
        if(datos.valor>=100){
            //si el valor es mayor o igual a 100 hacer un descuento del 20%
            descuento = Math.ceil(datos.valor*veinte)
        }

        if(datos.editorial=="La Flor"){
            //si la editorial es "la flor" se hace un descuento del 5%
            descuento = (Math.ceil((datos.valor*cinco)))+descuento   
        }

        let precioFinal = datos.valor-descuento
        div2.innerHTML=`
            Valor: ${precioFinal}
        `
    }
    console.log(datos.valor);
}

//const = 0,2

function mostrar(datos,color) {
    div.innerHTML= `
        Autor: ${datos.autor} <br>
        Titulo: ${datos.titulo} <br>
        <div style="background-color:${color} ;">
        Stock: ${datos.stock}
        </div>
    `
}
