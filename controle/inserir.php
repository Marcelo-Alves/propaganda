<?php
include_once '../modelo/inserir.php';
include_once '../modelo/cache.php';
   
try{
    $nome_img = $_FILES["img"]["name"];
    $extensao = pathinfo($nome_img);
    $ext = $extensao['extension'];
    $type= $_FILES["img"]["type"];
    $size= $_FILES["img"]["size"];
    $temp= $_FILES["img"]["tmp_name"];
    $error= $_FILES["img"]["error"];
    $post = array();
    $nome_imagem ='img'.date('dmyhms'). '-' . random_int(100,9999);
    $caminho_imagem = DIR_UPLOAD . $nome_imagem .'.'.$ext;
    move_uploaded_file($temp, $caminho_imagem);
    
    $nome_campo = 'imagem,' ;
    $valores = '"'.$nome_imagem.'.'.$ext.'",';

    foreach($_POST as $nome_post => $valor){
        $nome_campo .= $nome_post.',' ;
        $valores .= '"'.$valor.'",';
    }

    $nome_campo = substr($nome_campo,0,-1);
    $valores  = substr($valores,0,-1);
    //inserir::inserirBanco('publicidade',$nome_campo,$valores);
    //cache::buscaTudo();
    echo json_encode(array("erro" =>"0","mensagem"=>"Cadastrado com sucesso!","cor"=>"green"));
}
catch(Exception $e){
    echo json_encode(array("erro" =>"1","mensagem"=>"Erro ao cadastrar no Banco ou de subir a imagem","cor"=>"#FF0000"));
}
?>