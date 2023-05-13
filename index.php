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
    <div id="datas"></div>

    <div id='conteudo' name='conteudo'>

    </div>
    
</body>

<script>
     const dia = () => {
        const hoje  = new Date();
        const ano = hoje.getFullYear().toString().substr(-2);
        const dia = hoje.getDate().toString().padStart(2,'0')
        const mes = String(hoje.getMonth() + 1).padStart(2,'0')
        return "cache" + dia + mes + ano +'.json'
    }

    const conteudo = document.querySelector('#conteudo')
    const carregar = fetch('./cache/'+dia())
        .then(resposta => resposta.json())
        .then(resposta => resposta.map(itens => {  

            
            conteudo.innerHTML += itens.nome + 
            ' <br>  ' + itens.descricao + ' <br> ' + '<img src="'+itens.caminho + '" width=400 /> <br><br>'
        }));
   
    addEventListener('load',()=>{
        dia();
        });
</script>
</html>