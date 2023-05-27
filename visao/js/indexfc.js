const conteudo = document.querySelector('#conteudo')

fetch('./cache/cache.json')
.then(resposta => resposta.json()) 
.then(resposta => resposta.map(itens => {  
    let img=''  
    const imagens = itens.img.split(",")
    for(const imgs of imagens){
        img += '<img src="/visao/img_up/'+imgs+ '" width=60% />' 
     }
    conteudo.innerHTML += itens.nome + 
    ' <br>  ' + itens.descricao + ' <br> '+img+ '<br><br>'
}));