<?php
include_once '../modelo/conf/definicao.inc';


class upload{

    public static function Gravar($arquivo,$indece){
             
        $ext =   explode('.', $arquivo["name"][$indece]);
        //$type=  array($_FILES["img"]["type"]);
        //$size=  array($_FILES["img"]["size"]);
        $temp =  $arquivo["tmp_name"][$indece];
    //  $error= array($_FILES["img"]["error"]);
        $nome_imagem ='img'.date('dmyhms'). '-' . random_int(100,9999);
        $caminho_imagem =  DIR_UPLOAD . $nome_imagem .'.'.$ext[1];
        
        if(! move_uploaded_file($temp,$caminho_imagem)){
            return 1;
        }   

        return $nome_imagem .'.'.$ext[1];
        
    }
}



?>