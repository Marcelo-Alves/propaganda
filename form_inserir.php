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
        <div>
            <h3 id="mensagem"></h3>
        </div>
        <table>
            <form name="gravar">
                <tr><td>Nome  </td><td><input type="text" name="nome" id="nome"></td></tr>
                <tr><td>IMAGEM</td><td><input type="file" name="img" id="img"></td></tr>
                <input type="hidden" name="data_inicio" id="data_inicio" value="2023-05-14">
                <input type="hidden" name="data_fim" id="data_fim" value="2023-05-16">
                <input type="hidden" name="data_publicado" id="data_fim" value="2023-05-15">
                <input type="hidden" name="idusuario" id="idusuario" value="1">
                <tr><td>Descrição</td><td><textarea name="descricao" id="descricao" cols="30" rows="10"></textarea></td></tr>
                <tr><td colspan="2"> <input type="button" value="Cadastrar" name="btn_cadastrar" id="btn_cadastrar"></td></tr>
            </form>
        </table>
    </div>
</body>
<script>
        btn_cadastrar.addEventListener('click',() =>{
            const nome = document.querySelector('#nome').value
            const img = document.querySelector('#img').value
            const descricao = document.querySelector('#descricao').value
            
            if(nome == "" || img == "" || descricao == "" ){
                document.querySelector("#mensagem").innerHTML= "Por favor preencha todos os campos"
                document.querySelector("#mensagem").style.color ='#FF0000'
                return false;                
            }

            const formulario = document.forms.namedItem('gravar');            
            let dados = new FormData(formulario);
            fetch('/controle/inserir.php', {method: 'POST', body: dados});
            formulario.reset();
        });
    </script>
</html>