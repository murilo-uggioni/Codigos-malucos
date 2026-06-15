function contar(){
    var inicio = document.getElementById("inicio")
    var fim = document.getElementById("fim")
    var passo = document.getElementById("passo")
    var resp = document.getElementById("resp")
    if(inicio.value.length == 0 || fim.value.length == 0 || passo.value.length == 0){
        alert("Faltam dados!")
    }
    else{

    var n1 = Number(inicio.value)
    var n2 = Number(fim.value)
    var n3 = Number(passo.value)

    if(n3 <= 0){
        alert("Passos maior ou igual a zero, irei considerar ele como 1")
        n3 = 1
    }

    if(n2 > n1){
        resp.innerHTML = ""
        while(n1<n2){
            resp.innerHTML += `&#x1F449; ${n1}`
            n1 += n3
        }
        resp.innerHTML += `&#x1F449; &#x1F3F4;`
    }
    else{
        resp.innerHTML = ""
        while(n1>n2){
            resp.innerHTML += `&#x1F449; ${n1}`
            n1 -= n3
        }
        resp.innerHTML += `&#x1F449; &#x1F3F4;`
    }
}      
                
    }
