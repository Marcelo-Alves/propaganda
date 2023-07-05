const conteudo = document.querySelector('#conteudo')
const divdark = document.getElementById("carouselExampleDark")
let ativo ='active';
fetch('./cache/cache.json')
.then(resposta => resposta.json()) 
.then(resposta => resposta.map(itens => {  
    const imagens = itens.img.split(",")
      
    const titulo = document.createElement('div')  
    const desc = document.createElement('div')  
    const dark = document.createElement('div')  
    dark.setAttribute("class","carousel-inner")
    titulo.setAttribute("style","border: 1px solid #000000 ;margin:5px;")
    desc.setAttribute("style","border: 1px solid #000000;")

    titulo.innerHTML=itens.nome
    dark.append(titulo)

    for(const imgs of imagens){        
        const div = document.createElement('div');
        const criaimg = document.createElement('img');        

        div.setAttribute("class","carousel-item "+ativo);
        criaimg.setAttribute("class","d-block w-100");
        
        criaimg.src="/visao/img_up/"+imgs;
        div.appendChild(criaimg);
        dark.appendChild(div);
        ativo='';        
    }
    desc.innerHTML=itens.descricao
    dark.append(desc)
    const botoes ="<button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleDark' data-bs-slide='prev'>"
                +"<span class='carousel-control-prev-icon' aria-hidden='true'></span>"
                +"<span class='visually-hidden'>Anterior</span></button>"
                +"<button class='carousel-control-next' type='button' data-bs-target='#carouselExampleDark' data-bs-slide='next'>"
                +"<span class='carousel-control-next-icon' aria-hidden='true'></span>"
                +"<span class='visually-hidden'>Proximo</span></button>"

    divdark.append(dark)
    divdark.innerHTML += botoes
    

}));