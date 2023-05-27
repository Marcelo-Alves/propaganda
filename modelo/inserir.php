<?php
include_once 'mysql.php';
include_once 'busca.php';
class inserir  {   
    
    public static function inserirBanco($tabela,$campos,$valores) {
        try {            
            $sql= "INSERT INTO $tabela ($campos) values ($valores);";
            $rs = mysql::conexao()->prepare($sql);  			
            if(! $rs->execute()){
                echo json_encode(array("erro" =>"1","mensagem"=>"Erro no valor de insereção","cor"=>"FF0000"));
                return;
            }		

            $buscaid = busca::buscaTudo('id',$tabela,'order by id desc limit 1');
            //echo "<pre>";
            //echo($buscaid[0]->id);
            return $buscaid[0]->id;

        } catch (Exception $ex) {
            echo json_encode(array("erro" =>"1","mensagem"=>"Erro no valor de insereção, sql $sql","cor"=>"FF0000"));
        }        
    }
    
}