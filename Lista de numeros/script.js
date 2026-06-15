const lista_array = []
function lista(){
    var numero_string = document.getElementById("numero")
    var resposta = document.getElementById("resp")   
    var numero_int = Number(numero_string.value)
    var verificador_de_igual
  

    for(passo in lista_array){
         if(lista_array[passo] == numero_int){
            var verificador_de_igual = "Verdadeiro"
            break
         }
         else{
            var verificador_de_igual = "Falso"
         }
        }

    if(numero_int < 1 || numero_int > 100 ){
        alert("Numero não esta entre 1 e 100, digite outro numero!")
    } 
    else if(verificador_de_igual == "Verdadeiro"){
        alert("Esse numero já existe na lista!")
    }

    else{
        lista_array.push(numero_int)
        var mostrar = document.createElement("option")
        mostrar.text = `o numero ${numero_int} foi adicionado!`
        resposta.appendChild(mostrar)
    }
}
function relatorio(){
    if(lista_array[0] == null){
        alert("Peço que coloque valores antes de finalizar")
    }
    else{
    const relat = document.getElementById("Relatorio")
    relat.innerHTML = ""
    relat.innerHTML += `Ao todo temos ${lista_array.length}, numeros nessa lista <br>`
    const maior = Math.max(...lista_array)
    relat.innerHTML += `O maior valor é ${maior}<br>`
    var soma = 0
    for(passo in lista_array){
        soma += lista_array[passo]
    }
     relat.innerHTML += `A soma dos numero é ${soma} <br>`
     relat.innerHTML += `A Media dos numero é ${soma/lista_array.length}<br>`
    }
}
