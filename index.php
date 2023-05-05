<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>    <div id='conteudo' name='conteudo'></div></body>
<script>
    addEventListener('load',()=>{
        let texto = document.querySelector('#conteudo');
        fetch('./cache/cache050523.json')
        .then(resposta => resposta.json())
        .then(resposta => resposta.map( itens => { 
            texto.innerHTML += itens.nome + ' <br>  ' +  itens.descricao + ' <br> <img src="'+itens.imagem + '" /> <br> <br> ';
        }))        
    });
</script>
</html>