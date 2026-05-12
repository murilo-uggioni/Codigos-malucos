function carregar(){
    var agora = new Date()
    var horas = agora.getHours()
    var modi = document.body
    var imagem = document.getElementById("img")
    var resp = document.getElementById("horas")
    resp.innerHTML = `Agora são ${horas} horas`
    imagem.style.width = "450px"
    imagem.style.height = "450px"
    if(horas >= 0 && horas < 12){
        imagem.src = "manha.jpg"
        modi.style.background = "#B0C4DE"
    }
    else if (horas >= 12 && horas < 18){
        imagem.src = "tarde.jpg"
        modi.style.background = "#DAA520"
    }
    else{
        imagem.src = "noite.jpg"
        modi.style.background = "#4F4F4F"
    }
}