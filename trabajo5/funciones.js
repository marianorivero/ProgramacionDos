const Persona1 = {
    nombre:"Jose",
    apellido:"Perez",
    edad:33,
    sexo:"Masculino",
    datos: function () {
        return `${this.apellido}, ${this.nombre}`
    }
}
const Persona2 = {
    nombre:"Rosa",
    apellido:"Papaleo",
    edad:12,
    sexo:"Femenino",
    datos: function () {
        return `${this.apellido}, ${this.nombre}`
    }
}
const Persona3 = {
    nombre:"Romina",
    apellido:"Gallardo",
    edad:94,
    sexo:"Femenino",
    datos: function () {
        return `${this.apellido}, ${this.nombre}`
    }
}

const MostrarPersona = { 
    mostrar: function () {
        if (Persona1.edad >= 18) {
            console.log(Persona1.datos());
        }
        if (Persona2.edad >= 18) {
            console.log(Persona2.datos());
        }
        if (Persona3.edad >= 18) {
            console.log(Persona3.datos());
            
        }
    }   
}

MostrarPersona.mostrar()



 



