<?php
include_once '../modelo/inserir.php';
include_once '../modelo/cache.php';
include_once './upload.php';   
try{
    $nome_campo = '' ;
    $valores = '';
    foreach($_POST as $nome_post => $valor){
        $nome_campo .= $nome_post.',' ;
        $valores .= '"'.$valor.'",';
    }

    $nome_campo = substr($nome_campo,0,-1);
    $valores  = substr($valores,0,-1);

    $idpublicidade = inserir::inserirBanco('publicidade',$nome_campo,$valores);    

    for($i=0; $i < count($_FILES["img"]["name"]);$i++){

        $nome_imagem[$i] = upload::Gravar($_FILES["img"],$i);

       if( $nome_imagem[$i] == 1){
            echo json_encode(array("erro" =>"1","mensagem"=>"Erro de subir a imagem","cor"=>"#FF0000"));
            return;
       }
       inserir::inserirBanco('imagens','nome,idpublicidade',"'$nome_imagem[$i]', $idpublicidade"); 
    }
    cache::buscaTudo();
    echo json_encode(array("erro" =>"0","mensagem"=>"Cadastrado com sucesso!","cor"=>"green"));
}
catch(Exception $e){
    echo json_encode(array("erro" =>"1","mensagem"=>"Erro ao cadastrar no Banco ou de subir a imagem","cor"=>"#FF0000"));
}
?>