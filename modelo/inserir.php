<?php
include_once 'mysql.php';
class inserir  {   
    
    public static function inserirBanco($tabela,$campos,$valores) {
        try {            
            $sql= "INSERT INTO $tabela ($campos) values ($valores);";
            $rs = mysql::conexao()->prepare($sql);  			
            $rs->execute();		
            
        } catch (Exception $ex) {
            echo json_encode(array("erro" => $ex->getMessage(). " Erro sql ". $sql));
        }        
    }
    
}