import operacao from "./operacoes.js"
var botao = document.getElementById("btnenviar")
botao.addEventListener("click",calcular)
function calcular(){
var numero01 = document.getElementById("n1")
var numero02 = document.getElementById("n2")
var operador = document.getElementById("operador")
var resposta = document.getElementById("resp")
var n1 = Number(numero01.value)
var n2 = Number(numero02.value)
var ope = (operador.value)
if(numero01.value.length == 0 || numero02.value.length == 0){
    alert("Falta dados")
}
else{
    resposta.innerText = ""
    if(ope == "+"){
        resposta.innerText = operacao.soma(n1,n2)
    }
    else if(ope == "-"){
        resposta.innerText = operacao.sub(n1,n2)
    }
    else if(ope == "*"){
        resposta.innerText = operacao.mult(n1,n2)
    }
    else if(ope == "/"){
        resposta.innerText = operacao.div(n1,n2)
    }
    else{
        resposta.innerText = "Operação invalida"
    }
        
    }

}
