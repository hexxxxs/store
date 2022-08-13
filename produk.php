<?php

session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
};


require "functions.php";

// mengambil data di url
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM barang WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>AllStore Produk</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!-- aos -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- ICON -->
  <link rel="stylesheet" href="main.css" />
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
      <nav class="navbar navbar-expand-md navbar-expand-lg navbar-white bg-white sticky-top mb-4">
        <div class="container">
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
                <a class="nav-link active text-navbar-beranda" aria-current="page" href="index.php">Beranda</a>
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

      <!-- PRODUK TERBARU -->

      <div class="row mt-5 ">
        <div class="text-center">
          <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
          <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"] ?>">
          <img src="img/<?= $mhs["gambar"] ?>" width="250" class="rounded rounded-circle" alt="..." data-aos="zoom-in" data-aos-duration="1500">
        </div>
      </div>
      <div class="row mt-3 mb-5">
        <div class="col-3"></div>
        <div class="col-6" data-aos="fade-up" data-aos-duration="1000">
          <p class="mt-3 text-center fw-bold" value="<?= $mhs["nama"]; ?>"><?= $mhs["nama"]; ?></p>
          <p class=" mt-2 text-center" value="<?= $mhs["deskripsi"]; ?>"><?= $mhs["deskripsi"]; ?></p>
          <p class=" mt-2 text-center" value="<?= $mhs["ukuran"]; ?>"><?= $mhs["ukuran"]; ?></p>
          <p class=" mt-2 text-center" value="<?= $mhs["stok"]; ?>"><?= $mhs["stok"]; ?></p>
        </div>
        <div class="col-3"></div>
      </div>

    </div>


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
            <h5>Furniture</h5>
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
                <a href="#" class="nav-link p-0 text-secondary">Allstore@gmail.com</a>
              </li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">082839201341</a></li>
            </ul>
          </div>
        </footer>
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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <!-- js -->
  <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
  <!-- aos -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="js/cursor.js"></script>

</body>

</html>