function soma(a,b){
    return `A soma de ${a} e ${b} é ${a+b} `
}

function subtracao(a,b){
    return `A subtração de ${a} e ${b} é ${a-b} `
}

function multiplicacao(a,b){
    return `A multiplicação de ${a} e ${b} é ${a*b} `
}

function divicao(a,b){
    if(b > 0){
        return `A divição de ${a} e ${b} é ${a/b} `
    }
    else{
        return `Não é possivel realizar essa divisão`
    }

}

export default
{
    soma : soma,
    sub : subtracao,
    mult : multiplicacao,
    div : divicao
}