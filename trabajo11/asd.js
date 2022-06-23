function contar(text){
    let letterAmount=[]
    let mayor=0
    let res={}
    
    for (let i =0; i<text.length;i++){
        let letter = text[i]
        
        if(letterAmount[letter]==undefined && letter!=" "){
            letterAmount[letter]=1
        } else {
            letterAmount[letter]++
        }
        
        if(letterAmount[letter]>mayor){
            mayor=letterAmount[letter]
            res={
                letra: letter,
                repeticiones: mayor
            }
        }
    }
    console.log(res); 
}



let oracion ="por eso cancion llevame lejos, donde nadie se acuerde de mi, quiero ser el murmullo de una ciudad que no sepa quien soy";
console.log(oracion);

contar(oracion);