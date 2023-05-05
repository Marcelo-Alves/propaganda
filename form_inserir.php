<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Propaganda </title>
</head>
<body>
    <div>
        <div>
            <h1>Cadastro de Propaganda</h1>
        </div>
        <table>
            <form name="gravar">
                <tr><td>Nome  </td><td><input type="text" name="nome" id="nome"></td></tr>
                <tr><td>IMAGEM</td><td><input type="file" name="img" id="img"></td></tr>
                <tr><td>Descrição</td><td><textarea name="descricao" id="descricao" cols="30" rows="10"></textarea></td></tr>
                <tr><td colspan="2"> <input type="button" value="Cadastrar" name="btn_cadastrar" id="btn_cadastrar"></td></tr>
            </form>
        </table>
     
    
    </div>
</body>
<script>
        btn_cadastrar.addEventListener('click',() =>{
            const formulario = document.forms.namedItem('gravar');            
            let dados = new FormData(formulario);
            console.log(dados);
            fetch('/controle/inserir.php', {
                method: 'POST', 
                body: dados})
            .then((response) => response.json())
            .then(response => console.log(response));
        });
    </script>
</html>