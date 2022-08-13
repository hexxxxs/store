<?php

session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
};

?>






<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Allstore</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <link rel="stylesheet" href="main.css">
  <!-- ICON -->
  <link rel="icon" href="aset/allstore.jpg" />

</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" class="goo" version="1.1" width="100%">
    <defs>
      <filter id="goo">
        <feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur"></feGaussianBlur>
        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 35 -15" result="goo"></feColorMatrix>
        <feComposite in="SourceGraphic" in2="goo" operator="atop"></feComposite>
      </filter>
    </defs>
  </svg>
  <div class="page-wrap">
    <div class="container">
      <!-- HEADER -->
      <!-- LOGO -->
      <nav class="navbar navbar-expand-md navbar-expand-lg navbar-white bg-white sticky-top mb-4 ">
        <div class="container w-100">
          <!-- end logo -->
          <a class="navbar-brand title" style="color: #e76b6b" href="#">AllStore</a>
          <button class="navbar-toggler bg-success bg-opacity-50" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
              </svg></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-navbar-beranda" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-navbar-beranda" href="Furnitures.php">Barang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-navbar-beranda" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-navbar-beranda" href="logout.php" onclick="return confirm('Apakah anda ingin logout?')">Log Out</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

      <!--  -->

      <!-- SLIDER -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-aos-duration="1000" data-aos="fade-in">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="aset/1.png" class="w-100 lengkung" alt="..." />
            <div class="carousel-caption"></div>
          </div>
          <div class="carousel-item">
            <img src="aset/2.png" class="d-block w-100 lengkung" alt="..." />
            <div class="carousel-caption d-none d-md-block"></div>
          </div>
          <div class="carousel-item">
            <img src="aset/3.png" class="d-block w-100 lengkung" alt="..." />
            <div class="carousel-caption d-none d-md-block"></div>
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

      <!-- KATEGOI PRODUK -->

      <!-- KATEGORI -->
      <div class="row mt-4">
        <div class="col-md-2 col-sm-6 mb-3">
          <div class="card text-white" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
            <div class="text-center kategori-produk">
              <a href="#" class="ms-auto me-auto kategori-produk">
                <span>Baju</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 mb-3">
          <div class="card text-white" data-aos="fade-up" data-aos-duration="1300" data-aos-once="true">
            <div class="text-center kategori-produk">
              <a href="#" class="ms-auto me-auto kategori-produk">
                <span>Celana</span>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-2 col-sm-6 mb-3">
          <div class="card text-white" data-aos="fade-up" data-aos-duration="1600" data-aos-once="true">
            <div class="text-center kategori-produk">
              <a href="#" class="ms-auto me-auto kategori-produk">
                <span>jacket</span>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-2 col-sm-6 mb-3">
          <div class="card text-white" data-aos="fade-up" data-aos-duration="1900" data-aos-once="true">
            <div class="text-center kategori-produk">
              <a href="#" class="ms-auto me-auto kategori-produk">
                <span>Sendal</span>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-2 col-sm-6 mb-3">
          <div class="card text-white" data-aos="fade-up" data-aos-duration="2200" data-aos-once="true">
            <div class="text-center kategori-produk">
              <a href="#" class="ms-auto me-auto kategori-produk">
                <span>Topi</span>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-2 col-sm-6 mb-3">
          <div class="card text-white" data-aos="fade-up" data-aos-duration="2500" data-aos-once="true" <div class="card-body kategori-produk">
            <a href="#" class="ms-auto me-auto kategori-produk">
              <span>accessories</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- PRODUK TERBARU -->
    <section>
      <div class="container" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
        <div class="row">
          <div class="col-md-12 mt-4 text-center">
            <h3 class="text-produk-barang">WHAT DO YOU NEED?</h3>
          </div>
        </div>
      </div>
    </section>

    <!-- PRODUK -->
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 mb-3">
          <div class="card overflow-hidden" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
            <div class="inner">
              <img src="aset/1.1.png" class="card-img-top img-thumbnail gradien bg-transparent" alt="..." />
            </div>
            <div class="card-body text-center">
              <a href="produk.html">
                <h4 class="text-produk-barang">Formal style</h4>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 mb-3">
          <div class="card overflow-hidden text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <div class="inner">
              <img src="aset/2.2.png" class="card-img-top gradien img-thumbnail bg-transparent" alt="..." />
            </div>
            <div class="card-body">
              <a href="">
                <h4 class="text-produk-barang">Colorful style</h4>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-3">
          <div class="card text-center overflow-hidden" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
            <div class="inner">
              <img src="aset/3.3.png" class="card-img-top gradien img-thumbnail bg-transparent" alt="..." />
            </div>
            <div class="card-body">
              <a href="">
                <h4 class="text-produk-barang">Chill style</h4>
              </a>

            </div>
          </div>
        </div>

        <div class="col-md-12 ms-auto me-auto text-white" data-aos="flip-up" data-aos-duration="1000" data-aos-once="true">
          <a href="Furnitures.php" class="text-white"><button class="btn btn-success ms-auto me-auto d-block px-3">MORE</button></a>
        </div>
      </div>
    </div>

    <!-- chat -->

    <!--END CHAT  -->

    <!-- Footer -->
    <div class="container-fluid bg-dark text-white pb-1" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
      <div class="container">
        <footer class="row row-cols-5 py-5 my-5 border-top">
          <div class="col-xs-6 mx-auto">
            <h5>Social Media</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">instagram</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Facebook</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Twitter</a></li>
            </ul>
          </div>

          <div class="col-xs-3 mx-auto">
            <h5>Creator</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">I Putu Wahyu Widiatmika</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">I Kadek Andika Permana</a></li>
            </ul>
          </div>

          <div class="col-xs-6 mx-auto">
            <h5>Barang</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Baju</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Celana</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Sendal</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Topi</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Jacket</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">accessories</a></li>

            </ul>
          </div>
          <div class="col-xs-3 mx-auto">
            <h5>Contact</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-secondary">AllStore@gmail.com</a>
              </li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">082839201341</a></li>
            </ul>
          </div>
        </footer>
      </div>
    </div>
  </div>
  </div>
  <div id="cursor"></div>


  <!-- BOOTSTRAP ICON -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />

  <!-- GOOGLE FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;700&display=swap" rel="stylesheet" />

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <!-- js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- aos -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="js/cursor.js"></script>

</body>

</html>