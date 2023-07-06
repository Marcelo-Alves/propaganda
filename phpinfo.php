<html>

<header>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</header>
<body>

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

  <div class="carousel-inner">
    
      
    </div>
    
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Proximo</span>
  </button>
</div>

<script>
  function carregar() {

    let arrayvariavel = ['img270523120523-598.jpg','img270523120550-5005.jpg','img270523120550-6888.jpg'];
    let ativo ='active';
    for(const imagem of arrayvariavel){
        const div = document.createElement('div');
        const img = document.createElement('img');
        div.setAttribute('style','width:400px !important;border:1px solid #000000;');

        div.setAttribute("class","carousel-item "+ativo);
        div.setAttribute("data-bs-interval","2000");
        img.setAttribute("class","d-block w-50");
        
        img.src="/visao/img_up/"+imagem;
        div.appendChild(img);
        document.querySelector('.carousel-inner').appendChild(div);
        ativo='';
    }
  }
carregar();

</script>
<?php
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo '<br>' ;
$retirar = [$_SERVER['DOCUMENT_ROOT'].'/','.php'];
echo str_replace($retirar,'', $_SERVER['SCRIPT_FILENAME']);

?>
</body>
</html> 