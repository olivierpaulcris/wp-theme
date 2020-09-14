<!doctype html>
<html lang="en">

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="./css/bootstrap.min.css">

      <title>Sitio Corporativo</title>

      <?php wp_head(); ?>
</head>

<body>
      <!-- Menu -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">

                  <a class="navbar-brand" href="#">Logo Corporativo</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                              <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="#">Blog</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="#">Contacto</a>
                              </li>
                        </ul>
                  </div>
            </div>
      </nav>

      <!-- blog -->

      <div class="container">
            <h2 class="my-5 text-center text-primary">Mi Blog Personal</h2>
            <hr>

            <!-- Entradas -->

            <div class="row">


                  <div class="col-lg-9">

                        <!-- Entrada -->

                        <div class="card-body">
                              <a href="single.php">
                                    <h2>Titulo de la entrada</h2>
                              </a>
                              <p class="small mb-0">Fecha: 14/09/2020</p>
                              <p class="small mb-0">Auto: Paul Cristerna</p>
                              <p class="small">
                                    Categorias:
                                    <a href="#">Animales</a> /
                                    <a href="#">Comida</a>
                              </p>
                              <img src="img/1200.jpg" alt="" class="img-fluid mb-3">
                              <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate praesentium
                                    explicabo voluptate nam quia
                                    nisi in consequuntur, ex omnis voluptas reprehenderit debitis corrupti, veritatis
                                    assumenda non? Totam
                                    aperiam dolor officia!
                              </p>
                              <a href="single.php" class="btn btn-primary">Más info...</a>
                        </div>

                        <!-- Paginación -->
                        <div class="card-body">
                              <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                          <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                              </nav>
                        </div>


                  </div>

                  <!-- Aside -->

                  <div class="col-lg-3">

                        <div class="card-body">
                              <h4>Publicidad</h4>
                              <hr>
                              <img src="./img/vertical.jpg" alt="" class="img-fluid">
                        </div>

                  </div>
            </div>
      </div>

      <footer class="container-fluid py-4 text-center text-light bg-dark">
            <h5>Lorem ipsum dolor sit amet consectetur.</h5>
      </footer>

      <!-- Optional JavaScript -->
      <?php wp_footer(); ?>
</body>

</html>