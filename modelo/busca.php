<?php
include_once 'mysql.php';
class busca  {   
    public static function buscaTudo($campo,$tabela,$ordem =null) {
        try {
            $sql= "SELECT $campo FROM $tabela $ordem ;";
            $rs = mysql::conexao()->prepare($sql);  
            $rs->execute();
            $dados=$rs->fetchAll(PDO::FETCH_OBJ);
            //echo $sql;
            return $dados;
        } catch (Exception $ex) {
            echo $ex->getMessage(). " Erro sql ". $sql;
        }        
    }
}