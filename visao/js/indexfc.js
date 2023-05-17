const conteudo = document.querySelector('#conteudo')
fetch('./cache/cache.json')
.then(resposta => resposta.json()) 
.then(resposta => resposta.map(itens => {              
    conteudo.innerHTML += itens.nome + 
    ' <br>  ' + itens.descricao + ' <br> ' + '<img src="/visao/img_up/'+itens.imagem + '" width=400 /> <br><br>'
}));