<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Propaganda </title>
    <script src="visao/js/formfc.js" defer></script>
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
                
                <input type="hidden" name="data_publicado" id="data_fim" value="2023-05-15">
                <input type="hidden" name="idusuario" id="idusuario" value="1">
                <tr><td>Descrição</td><td><textarea name="descricao" id="descricao" cols="30" rows="10"></textarea></td></tr>
                <tr><td>Data Inicio</td><td><input type="date" name="data_inicio" id="data_inicio" ></td></tr>
                <tr><td>Data Fim</td><td><input type="date" name="data_fim" id="data_fim" ></td></tr>
                <tr><td colspan="2"> <input type="button" value="Cadastrar" name="btn_cadastrar" id="btn_cadastrar"></td></tr>
            </form>
        </table>
    </div>
</body>
<script>
      
    </script>
</html>