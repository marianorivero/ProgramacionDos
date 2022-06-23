let form = document.getElementById("form");
let div = document.getElementById("div");

form.addEventListener("submit", function (e) {

    e.preventDefault();

    let datos = new FormData(form);

    fetch("conexion.php",{
        method:"POST",
        body: datos
    })
    .then(res => res.json())
    .then(data => {
        if (data) {
            console.log(data);
            div.innerHTML=`Usuario encontrado`
        }else{
            console.log(data);
            div.innerHTML=`Usuario no encontrado`
        }  
    })
    
})
