<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./style.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./css/main.css" rel="stylesheet">
</head>
<!-- cor e inicio do corpo -->

<body style="background-color: black;">
  <!-- Logo da navbar Action Heroes -->
  <div class="container-fluid bg-dark" style="height:100px">
    <div class="container-fluid bgcoloricon">
      <img src="./img/modelo10.png" class="w-10" style="margin: 0% 45%; height:100px" alt="">
      <!-- POSIÇAO DOS ICONES  -->
      <div class="posicaoicon ">
        <!-- icone 1 lupa -->
        <span class="mdi mdi-card-search-outline"></span>
        ㅤ
        <form class="d-flex">
          <!-- balao pesquisa -->
          <input class=" widthpesquisa" type="search" placeholder="Search" aria-label="Search" class="widthpesquisa">
          ㅤ
          <button class="btn btn-outline-danger" type="submit">Pesquisa</button>
        </form>
        ㅤ
        <!-- icone 2 boneco -->
        <span class="mdi mdi-account"></span>
        ㅤ
        <!-- icone 3 carrinho -->
        <span class="mdi mdi-cart-outline"></span>

        ㅤ
      </div>
    </div>
  </div>
  ㅤ


 <!-- rodapé da navbar -->
  <h1 style="background-color: black; color: white; text-align: center; font-size: small;">
SOMENTE HOJE 🚀 Até 50% OFF nas ofertas diárias</h1>

  <!-- banner index carrocel -->

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!-- imagem 1 carrocel -->
        <img src="./img/imagembanner2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>INCRÍVEL EM TODOS OS SENTIDOS</h1>
          <p>Deixe seus amigos verdes de inveja (ou gama) ao levar para casa a impressão de belas artes Hulk Legacy Deluxe de Kael Ngu.</p>
        </div>
      </div>
      <div class="carousel-item">
        <!-- imagem 2 carrocel -->
        <img src="./img/imagembanner1.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <!-- imagem 3 carrocel -->
        <img src="./img/imagembanner3.jpeg" class="d-block w-100" alt="..." >
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- fim banner carrocel -->
 <!-- INICIO CARDS INDEX -->
 
 <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Action Figures</h2>
          <p> <span>Marvel</span> </p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member ">
              <div class="member-img bordacard">
                <img src="./img/imgcard2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Galactos</h4>
                <span>Marvel</span>
                <p>Galactus, também conhecido como Devorador de Mundos, é um personagem de histórias em quadrinhos, uma entidade cósmica dentro do universo Marvel da Marvel Comics. </p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member ">
              <div class="member-img bordacard">
                <img src="./img/imgcard1.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Thanos</h4>
                <span>Marvel</span>
                <p>Thanos é um supervilão fictício das histórias em quadrinhos publicadas pela editora norte-americana Marvel Comics inspirado em Thanatos. Com primeira aparição na edição The Invincible Iron Man #55 e foi criado pelo escritor-artista Jim Starlin, com visual inspirado em Darkseid. </p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member ">
              <div class="member-img bordacard">
                <img src="./img/imgcard3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Magneto</h4>
                <span>Marvel</span>
                <p>Magneto é um personagem fictício do Universo Marvel, um supervilão criado e publicado pela editora Marvel Comics, sendo considerado um dos principais inimigos dos X-Men. Magneto é um mutante com enormes poderes de manipulação de campos magnéticos, além de controlar qualquer tipo de metal, incluindo o Adamantium. </p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

        </div>

      </div>
    </section><!-- End Chefs Section -->
</body>




<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>