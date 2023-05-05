<?php
   
    try{


        $nome= $_FILES["img"]["name"];
        $extensao = pathinfo($nome);
        $ext = $extensao['extension'];
        $type= $_FILES["img"]["type"];
        $size= $_FILES["img"]["size"];
        $temp= $_FILES["img"]["tmp_name"];
        $error= $_FILES["img"]["error"];

        $caminho = $_SERVER['DOCUMENT_ROOT'].'/visao/img_up/img'.date('dmy').'.'.$ext;
        $caminho2 = '/visao/img_up/img'.date('dmy').'.'.$ext;
        move_uploaded_file($temp, $caminho);
        $arquivo =array('nome'=>$_POST['nome'],'descricao'=>$_POST['descricao'],"caminho" => $caminho2);
        ob_clean();
            echo json_encode($arquivo);
        $cache = ob_get_contents();
        ob_end_clean();
        file_put_contents($_SERVER['DOCUMENT_ROOT'].'/cache/cache'.date('dmy').'.json',$cache);

    }
        catch(Exception $e){
        echo json_encode(array('erro'=> $e->getMessage()));
    }

?>