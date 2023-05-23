btn_cadastrar.addEventListener('click',() =>{
    const nome = document.querySelector('#nome').value
    const img = document.querySelector('#img').value
    const descricao = document.querySelector('#descricao').value
    const datainicio = document.querySelector('#data_inicio').value
    const datafim = document.querySelector('#data_fim').value
    
    if(nome == "" || img == "" || descricao == "" || datainicio == "" || datafim == ""){
        document.querySelector("#mensagem").innerHTML = "Por favor preencha todos os campos"
        document.querySelector("#mensagem").style.color = '#FF0000'
        return false;                
    }

    const dia = new Date()
    const hoje = dia.getFullYear() +'-'+String(dia.getMonth() + 1).padStart(2,'0') +'-'+dia.getDate()
    const formulario = document.forms.namedItem('gravar')          
    let dados = new FormData(formulario)
    dados.append('data_publicado',hoje)

    async function inserir ()  {
        await fetch('../../controle/inserir.php', {method: 'POST',headers: {'Content-Type': 'application/json'}, body: dados})
        .then(resposta => resposta.json())
        .then(resposta => {         
         
            document.querySelector("#mensagem").innerHTML ='<h3> '+resposta.mensagem+' </h3>';
            document.querySelector("#mensagem").style.color = resposta.cor;
            resposta.erro == "0" ?  formulario.reset(): null;
            
        });        
    }
    inserir();
});

