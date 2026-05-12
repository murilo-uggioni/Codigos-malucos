function verificar(){
    var agora = new Date()
    var ano_atual = agora.getFullYear()
    var fano = document.getElementById("txtano")
    var result = document.getElementById("resp")
    if(fano.value == 0 || fano.value > ano_atual){
        window.alert("[Erro] verefique os seus dados")
    }
    else{
        var fsex = document.getElementsByName("sexo")
        var idade = ano_atual - Number(fano.value)
        var genero
        var img = document.createElement("img")
        img.setAttribute("id","foto")
        img.style.width ="300px";
        img.style.height = "300px"; 
        //______________________________________________________________________________________________________________________________
        if (fsex[0].checked){
            genero = "Homem"
   
        if(idade > 0 && idade < 12 ){
            //criança
            img.setAttribute("src", "crianca_homem.png")
        }

        else if (idade >= 12 && idade < 18){
            //adolecente
            img.setAttribute("src", "adolecente_homem.png")
        }

        else if (idade >= 18 && idade < 65){
            //adulto
            img.setAttribute("src", "adulto_homem.png")
        }

        else{
            //idoso
            img.setAttribute("src", "idoso_homem.png")
        }
        }
        else if(fsex[1].checked){
            genero = "Mulher"
               // criança
        if(idade > 0 && idade < 12 ){
            //criança
          img.setAttribute("src", "crianca_mulher.png")
        }

        else if (idade >= 12 && idade < 18){
            //adolecente
            img.setAttribute("src", "adolecente_mulher.png")
        }

        else if (idade >= 18 && idade < 65){
            //adulto
            img.setAttribute("src", "adulta_mulher.png")
        }

        else{
            //idoso
            img.setAttribute("src", "idosa_mulher.png")
        }
        }
         //____________________________________________________________________________________________________________________________
        result.style.textAlign="center";
        result.innerHTML = `Dectamos ${genero} com ${idade} anos `
        result.appendChild(img)
    }
}