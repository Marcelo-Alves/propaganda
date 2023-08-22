<?php
    include('./modelo/conf/definicao.inc');

    $url =  $_SERVER['REQUEST_URI'].'/';
    

    if("/" === $_SERVER['REQUEST_URI']){
        $url = "/index";
    }
    
   /* echo "<br> <pre>";

    print_r($url);
    echo "<br> <br> ";
    print_r($_SERVER['REQUEST_URI']);
    echo "<br> <br> ";
    echo ($_SERVER['REQUEST_URI']);
    echo "<pre><br>";*/

    $u = explode('/',$url);

    $classe  = $u[1];
    $metodo="";

    $pastas = array('painel','admin');

    if(isset($u[2]) &&  in_array($u[1],$pastas) ){
        $classe  = $u[1];
        $metodo = ($u[2] == null )? 'index' : $u[2]; 
    }
   
    if(file_exists('./controle/'.$classe.".php") == true)
    {
        include_once('./controle/'.$classe.".php") ;

        if(method_exists($classe,$metodo))
        {
            $classe::$metodo();
        }
    }

    if(file_exists('./visao/'.$classe.'/'.$metodo.".php") == true)
    {
        include_once('./visao/'.$classe.'/'.$metodo.'.php' );

    }
    elseif(file_exists('./visao/'.$classe.".php") == true)
    {	
        include_once('./visao/'.$classe.".php" );
    }
    else{
        include_once("404.html" );
    }