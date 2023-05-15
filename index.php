<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        #conteudo {
            margin: 0 auto;
            padding: 10px;
            width: 80%;
            height: 80%;
            overflow-y: scroll;
            border: 1px solid #000000;
        }
        #conteudo img{
            margin-top: 5px;
            padding: 5px;
        }
</style>
</head>
<body>
    <div id="datas"></div>
    <div id='conteudo' name='conteudo'>
    </div>
    
</body>
<script>
    
  
    const conteudo = document.querySelector('#conteudo')

    const carregar = fetch('./cache/cache.json')
        .then(resposta => resposta.json()) 
        .then(resposta => resposta.map(itens => {              
            conteudo.innerHTML += itens.nome + 
            ' <br>  ' + itens.descricao + ' <br> ' + '<img src="/visao/img_up/'+itens.imagem + '" width=400 /> <br><br>'
        }));
</script>
</html>