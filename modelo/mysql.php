<?php
include_once 'conf/denificao.inc';

class mysql {
    public static function conexao(){
        try {
            $conn = new PDO('mysql:host='.LINK.';dbname='.BANCO, USUARIO, SENHA);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (Exception $e) {
            echo json_encode(array("erro" =>"1","mensagem"=>"Erro ao conectar ao Banco","cor"=>"#FF0000"));
      }
    }
}
