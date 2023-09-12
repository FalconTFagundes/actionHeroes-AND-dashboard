<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


  <title>Document</title>
</head>
<style>
  .carousel-1 {
    height: 300px;
  }

  .carouselProd-2 {
    margin: 0;
    justify-content: center;
  }

  .form-search {
    height: 30px;
    margin-top: 25px;
  }

  .resp {
    font-size: 14px;
  }

  .icon-link {
    margin-right: 10px;
    color: black;
  }

  .custom-link a {
    color: blue;
    text-decoration: none;
    transition: color 0.3s;
  }

  .custom-link a:hover {
    color: red;
  }
</style>

<body>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <div class="d-flex justify-content-start align-items-center">
        <form class="d-flex">
          <input class="form-control me-2 form-search" type="search" placeholder="Search" aria-label="Search">
          <button type="button" class="btn btn-primary btn-sm h-0 mt-4"><i class="fas fa-search"></i></button>

          </button>

        </form>
      </div>
      <div class="d-flex justify-content-center align-items-center">
        <img src="./img/logoAction.jpg" alt="">
      </div>
      <div class="d-flex justify-content-end align-items-center">
        <span class="mx-3 custom-link"><a href="#"><i class="fas fa-user-plus mx-1"></i> Cadastro </a></span>
        <span class="mx-3 custom-link"><a href="#"><i class="fas fa-sign-in-alt mx-1"></i> Login </a></span>
        <span class="mx-3 custom-link"><a href="#"><i class="fas fa-shopping-cart mx-1 "></i> Carrinho</a></span>
      </div>
    </div>
  </nav>


  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>



    <div class="carousel-inner text-centermt-1 carousel-1">
      <div class="carousel-item active">
        <img src="./img/capa.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./img/capa.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./img/capa.png" class="d-block w-100" alt="...">
      </div>
    </div>


    <!--carousel de produtos   -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--vitrine de produtos  -->
  <div class="container">
    <div id="carouselExampleControlsNoTouching" class="carousel slide mt-5 mx-auto text-center" data-bs-touch="false" data-bs-interval="false">
      <div class="carousel-inner ">
        <div class="carousel-item active">
          <div class="d-flex w-100 bg-dark">
            <div class=" d-flex justify-content-center">
              <!-- primeiro card -->
              <div class="col-md-2 mb-4 mt-4 mx-1">
                <div class="card">
                  <img src="./img/suka.jpg" class="card-img-top" alt="Produto 1">
                  <div class="card-body">
                    <h5 class="card-title">Produto 1</h5>
                    <p class="card-text">Descrição do Produto 1</p>
                  </div>
                </div>
              </div>

              <!-- segundo card -->
              <div class="col-md-2 mb-4 mt-4 mx-1">
                <div class="card">
                  <img src="./img/suka.jpg" class="card-img-top" alt="Produto 1">
                  <div class="card-body">
                    <h5 class="card-title">Produto 1</h5>
                    <p class="card-text">Descrição do Produto 1</p>
                  </div>
                </div>
              </div>

              <!-- terceiro card -->
              <div class="col-md-2 mb-4 mt-4 mx-1">
                <div class="card">
                  <img src="./img/suka.jpg" class="card-img-top" alt="Produto 1">
                  <div class="card-body">
                    <h5 class="card-title">Produto 1</h5>
                    <p class="card-text">Descrição do Produto 1</p>
                  </div>
                </div>
              </div>

              <!-- quarto card -->
              <div class="col-md-2 mb-4 mt-4 mx-1">
                <div class="card">
                  <img src="./img/suka.jpg" class="card-img-top" alt="Produto 1">
                  <div class="card-body">
                    <h5 class="card-title">Produto 1</h5>
                    <p class="card-text">Descrição do Produto 1</p>
                  </div>
                </div>
              </div>

              <!-- quinto card -->
              <div class="col-md-2 mb-4 mt-4 mx-1">
                <div class="card">
                  <img src="./img/suka.jpg" class="card-img-top" alt="Produto 1">
                  <div class="card-body">
                    <h5 class="card-title">Produto 1</h5>
                    <p class="card-text">Descrição do Produto 1</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

        <!-- segunda pagina carousel -->

        <div class="carousel-item">
          <div class=" d-flex justify-content-center">
            <div class="d-flex w-100 bg-dark">
              <div class="d-flex justify-content-center">
                <div class="col-md-2 mb-4 mt-4 mx-1">
                  <div class="card">
                    <img src="./img/suka.jpg" class="card-img-top" alt="Produto 1">
                    <div class="card-body">
                      <h5 class="card-title">Produto 1</h5>
                      <p class="card-text">Descrição do Produto 1</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-2 mb-4 mt-4 mx-1">
                  <div class="card">
                    <img src="./img/suka.jpg" class="card-img-top" alt="Produto 1">
                    <div class="card-body">
                      <h5 class="card-title">Produto 1</h5>
                      <p class="card-text">Descrição do Produto 1</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-2 mb-4 mt-4 mx-1">
                  <div class="card">
                    <img src="./img/suka.jpg" class="card-img-top" alt="Produto 1">
                    <div class="card-body">
                      <h5 class="card-title">Produto 1</h5>
                      <p class="card-text">Descrição do Produto 1</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-2 mb-4 mt-4 mx-1">
                  <div class="card">
                    <img src="./img/suka.jpg" class="card-img-top" alt="Produto 1">
                    <div class="card-body">
                      <h5 class="card-title">Produto 1</h5>
                      <p class="card-text">Descrição do Produto 1</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-2 mb-4 mt-4 mx-1">
                  <div class="card">
                    <img src="./img/suka.jpg" class="card-img-top" alt="Produto 1">
                    <div class="card-body">
                      <h5 class="card-title">Produto 1</h5>
                      <p class="card-text">Descrição do Produto 1</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- segundo banner -->
 

<div class="bg-danger h-100 mt-3">
<h1>action</h1>
</div>

</div>

width:100%;
opacit: 0;
transiction all:0.5s;
position:absolute;
z-index: -1;




</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>