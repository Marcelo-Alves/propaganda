<?php
    $urls = explode('/',$_SERVER['SCRIPT_FILENAME']);

    $pagina =  $urls[6];
    if(count($urls) > 7){ 
        $urls[6].'/'.$urls[7];
    }

    include_once('./visao/template/cabecario.php');
    include_once('./visao/template/topo.php');
?>

<div id='conteudo' name='conteudo'>
    <div id="carouselExampleDark" class="carousel carousel-fade slide text-center" data-bs-ride="carousel">         
    </div>
</div>   

<?php
    include_once('./visao/template/rodape.php');

?>