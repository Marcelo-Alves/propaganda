<?php
    include('./modelo/conf/definicao.inc');

    $url = ($_SERVER['REQUEST_URI']=="/"?"/index":$_SERVER['REQUEST_URI']);
    $u = explode('/',$url);
    $prexcaminho='';
    $prexclasse='';
    $classe  = $u[1];
    $metodo =  $u[2];

    $pastas = array('painel','admin');

    if(count($u) > 2 &&  in_array($u[1],$pastas) ){
        $classe  = $u[1];
        $metodo = $u[2]==""?'index':$u[2]; 
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

?>