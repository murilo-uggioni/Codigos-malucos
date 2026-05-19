function contar(){
    var inicio = document.getElementById("inicio")
    var fim = document.getElementById("fim")
    var passo = document.getElementById("passo")
    var resp = document.getElementById("resp")
    
    var n1 = Number(inicio.value)
    var n2 = Number(fim.value)
    var n3 = Number(passo.value)

    if(n3 <= 0 || n3 > n2){
        alert("quantidade de passos invalidos! Peço que troque o valor")
    }
    else{
    while(n1 <= n2){
        if(n1 >= n2){
             resp.innerHTML += `&#x1F449; &#x1F3F4;`
             break
        }
        resp.innerHTML += `&#x1F449; ${n1}`
        n1 += n3
    }
    }
}