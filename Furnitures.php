<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
};


require "functions.php";

$mahasiswa = query("SELECT * FROM barang ORDER BY id DESC");


//ketika tombol cari ditekan
if (isset($_POST["cari"])) {

  $mahasiswa = cari($_POST["keyword"]);
}

if (isset($_POST["semua"])) {

  $mahasiswa = query("SELECT * FROM barang ORDER BY id DESC");
}




// ketika tombol tam

?>





<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>MyFurniture</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!-- aos -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- ICON -->
  <link rel="stylesheet" href="main.css" />
  <link rel="icon" href="aset/allstore.jpg" />
  <style>

  </style>


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
    <div class="container mb-5">
      <!-- HEADER -->
      <!-- LOGO -->
      <nav class="navbar navbar-expand-md navbar-expand-lg navbar-white bg-white fixed-top ">
        <div class="container  ">
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
            <ul class="navbar-nav ms-auto ">
              <li class="nav-item">
                <a class="nav-link  text-navbar-beranda" href="index.php">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-navbar-beranda" href="#">Barang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-navbar-beranda" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-navbar-beranda" href="logout.php" onclick="return confirm('Apakah anda ingin logout?')">Log Out</a>
              </li>
              <nav class="navbar navbar-light bg-white">
                <div class="container mx-auto">
                  <form class="d-flex" action="" method="POST">
                    <input class="form-control me-2" type="search" placeholder="Search" name="keyword" aria-label="Search" id="keyword" />
                    <button class="btn btn-outline-secondary" type="submit" id="tombol-cari" name="cari">Search</button>
                  </form>
                </div>
              </nav>
            </ul>
          </div>
        </div>
      </nav>

      <!-- LIST NAMA -->


      <br><br><br><br>
      <!-- PRODUK TERBARU -->


      <div class="row mb-3">
        <div class="col-3 ms-2" data-aos="fade-up" data-aos-duration="1600">

          <a href="tambah.php" class="btn btn-outline-secondary" data-aos-once="true">Masukkan Barang</a>

        </div>
        <div class="col-3 ms-2" data-aos="fade-up" data-aos-duration="1600">

          <a href="export.php" class="btn btn-outline-secondary" data-aos-once="true">Export excel</a>

        </div>
        <div class="col-3 ms-2 " data-aos="fade-up" data-aos-duration="1600">

          <form class="d-flex" action="" method="POST">
            <button class="btn btn-outline-secondary" type="submit" id="semua" name="semua">Tampilkan Semua</button>
          </form>

        </div>
      </div>


      <!-- PRODUK -->
      <!-- TABLE -->
      <div class="container" id="container">
        <div class="row">



          <?php foreach ($mahasiswa as $row) : ?>

            <div class="col-md-4 col-sm-6 mb-3">
              <div class="card text-center" data-aos="fade-up" data-aos-duration="1600">
                <div class="inner">
                  <img src="img/<?= $row["gambar"]; ?>" class="card-img-top gradien img-thumbnail bg-transparent" alt="..." />
                </div>
                <div class="card-body">
                  <a href="produk.php?id=<?= $row["id"]; ?>">
                    <h4 class="text-produk-barang"><?= $row["nama"]; ?></h4>
                  </a>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-6 mt-5">
                          <h4 class="text-secondary"> '<?= $row["ukuran"]; ?>'</h4>
                        </div>
                        <div class="col-md-6 mt-5">
                          <h4> '<?= $row["stok"]; ?>'</h4>
                        </div>
                      </div>
                      <p><?= $row["deskripsi"]; ?></p>

                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-6 ">
                    <a href="ubah.php?id=<?= $row["id"]; ?>" class="btn btn-secondary mt-4 mb-4">Update</a>
                  </div>
                  <div class="col-6"><a href="hapus.php?id=<?= $row["id"]; ?>" class="btn btn-danger mt-4 mb-4" onclick="return confirm('yakin menghapus <?= $row["nama"]; ?>')">Hapus</a></div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

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

  <!-- aos -->

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="js/script.js"></script>
  <script src="js/cursor.js"></script>

</body>

</html>