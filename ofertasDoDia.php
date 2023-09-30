
<?php include_once 'navbar.php'; 
    include_once 'func/func.php';
    include_once 'config/conexao.php';
    include_once 'config/constantes.php';?>

<link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/cards3d.css">


    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/style.css" rel="stylesheet">
    <!-- carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<br><br>



<div class="container">
  <div class="card text-center">
    <div class="card-header">
      Ofertas do Dia
    </div>
    <div class="card-body">
      <h5 class="card-title">Conheça as nossas especiais ofertas</h5>
      <p class="card-text">Todos os dias uma oferta diferente é adicionada.</p>
      <a href="#prodMeio" class="btn btn-primary">Veja mais</a>
    </div>
    <div class="card-footer text-muted">
      Action Figures
    </div>
  </div>
  <br><br>
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <?php
 $inicioofertasdodia = listarTodosRegistros('cardofertasdodia', 'idcardofertasdodia, imagem1, titulo, comentario, ativo', 'A');
 foreach ($inicioofertasdodia as $listarofertasdodia) {
   $imagem1oferta = $listarofertasdodia->imagem1;
   $titulo1oferta = $listarofertasdodia->titulo;
   $comentario1oferta = $listarofertasdodia->comentario;
 
 ?>
        
    <div class="col">
      <div class="card">
        <div class="image-container" style="height: 400px;">
          <img src="<?php echo $imagem1oferta; ?>" class="card-img-top" alt="...">
        </div>
<br>
<br>
        <div class="card-body">
          <h5 class="card-title"><?php echo $titulo1oferta; ?></h5>
          <p class="card-text"><?php echo $comentario1oferta; ?></p>
        </div>
      </div>
    </div>
<?php
 }

?>

  



  </div>
</div>

<?php include_once 'footer.php'; ?>