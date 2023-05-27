<?php
include_once 'conf/denificao.inc';
include_once 'mysql.php';
class cache  { 
    public static function buscaTudo() {
        try {
            $sql= "SELECT * FROM propaganda.publicado p";

            $rs = mysql::conexao()->prepare($sql);  
            $rs->execute();
            $dados=$rs->fetchAll(PDO::FETCH_OBJ);
            
            $cache = json_encode($dados);

            $arquivo = fopen('/mnt/d/teste/php/propaganda/cache/cache.json','w');
            fwrite($arquivo, $cache);
            fclose($arquivo);
        } catch (PDOException $ex) {
            echo json_encode(array("erro" =>"1","mensagem"=>"Erro ao criar cache","cor"=>"#FF0000"));
        }        
    }
}
cache::buscaTudo();