<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
};

require "functions.php";

//mengecek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {

  //mengecek apakah data berhasil ditambahkan
  if (tambah($_POST) > 0) {
    echo  "   <script>
    alert('data berhasil ditambahkan!!');
    document.location.href =  'Furnitures.php';
</script>";
  } else {
    echo "   <script>
                alert('data gagal ditambahkan!!');
                document.location.href =  'Furnitures.php';
            </script>";
  }
}
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Insert Barang</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
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
    <div class="container mt-5">
      <div class="row">
        <div class="col-5 mx-auto"></div>
      </div>
      <div class="card login-form">
        <div class="card-body">
          <h2 class="card-title text-center">Insert Barang</h2>
          <h6 class="card-subtitle text-center text-muted mb-5 fw-bold">Insert Barang Baru !!!</h6>


          <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-4">
              <label for="nama" class="form-label">nama barang*</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama barang" required>
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label">deskripsi*</label>
              <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="deskripsi" required>
                  </textarea>
            </div>
            <div class="mb-3">
              <label for="ukuran" class="form-label">ukuran*</label>
              <input type="text" class="form-control" id="ukuran" name="ukuran" placeholder="ukuran" required>
            </div>
            <div class="mb-3">
              <label for="stok" class="form-label">stok*</label>
              <input type="text" class="form-control" id="stok" name="stok" placeholder="stok" required>
            </div>
            <div class="mb-3">
              <label for="gambar" class="form-label">gambar*</label>
              <input type="file" class="form-control" id="gambar" name="gambar" placeholder="gambar">
            </div>


            <div class="d-grid mt-5">
              <button type="submit" class="btn btn-success btn-login" name="submit">Insert</button>
            </div>


          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="cursor"></div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script src="js/cursor.js"></script>

</body>

</html>