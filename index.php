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
    width: 80%;
    height: 80%;
    overflow-y: scroll;
  }
</style>


</head>
<body>
    <div id='conteudo' name='conteudo'>

    </div>
    
</body>

<script>
    addEventListener('load',()=>{
        fetch('./cache/cache040523.json')
        .then(resposta => resposta.json())
        .then(resposta => {
            document.querySelector('#conteudo').innerHTML = resposta.nome + ' <br>  ' + resposta.descricao + ' <br> ' + '<img src="'+resposta.caminho + '" />'
        }
        )  

    });
</script>
</html>