<?php
include_once 'conf/denificao.inc';
include_once 'mysql.php';
class cache  { 
    public static function buscaTudo() {
        try {
            $sql= "SELECT id,descricao,UPPER(nome) as nome FROM propaganda.publicidade p 
                            WHERE DATE_FORMAT(now(),'%Y-%m-%d') between p.data_inicio and p.data_fim 
                            ORDER BY rand()";

            $rs = mysql::conexao()->prepare($sql);  
            $rs->execute();
            $dados=$rs->fetchAll(PDO::FETCH_OBJ);
            
            $cache = json_encode($dados);

            $arquivo = fopen(DIR_CACHE,'w');
            fwrite($arquivo, $cache);
            fclose($arquivo);
        } catch (PDOException $ex) {
            echo json_encode(array("erro" =>"1","mensagem"=>"Erro ao criar cache","cor"=>"#FF0000"));
        }        
    }
}
cache::buscaTudo();