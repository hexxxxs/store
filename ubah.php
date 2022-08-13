<?php


session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require "functions.php";

// mengambil data di url
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM barang WHERE id = $id")[0];


//mengecek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {

  //mengecek apakah data berhasil diubah
  if (ubah($_POST) > 0) {
    echo "
                        <script>
                            alert('data berhasil diubah!!');
                            document.location.href =  'Furnitures.php';
                        </script>";
  } else {
    echo "   <script>
                alert('data gagal diubah!!');
          
            </script>";
  }
}
?>






<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update barang</title>
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
          <h2 class="card-title text-center">Update data</h2>
          <h6 class="card-subtitle text-center text-muted mb-5 fw-bold">Update Barang</h6>


          <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
            <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"] ?>">

            <div class="mb-4">
              <label for="nama" class="form-label">nama barang : *</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama barang" value="<?= $mhs["nama"]; ?> " required>
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label">deskripsi*</label>
              <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="deskripsi" value="<?= $mhs["deskripsi"]; ?>" required>
                  </textarea>
            </div>
            <div class="mb-4">
              <label for="ukuran" class="form-label">Ukuran barang : *</label>
              <input type="text" class="form-control" id="ukuran" name="ukuran" placeholder="masukkan ukuran barang" value="<?= $mhs["ukuran"]; ?> " required>
            </div>
            <div class="mb-4">
              <label for="stok" class="form-label">Stok barang : *</label>
              <input type="text" class="form-control" id="stok" name="stok" placeholder="masukkan stok barang" value="<?= $mhs["stok"]; ?> " required>
            </div>
            <div class="mb-3">
              <label for="gambar">gambar : </label>
              <br>
              <img src="img/<?= $mhs["gambar"] ?>" width="150" alt="">
              <br><br>
              <input type="file" name="gambar" id="gambar">
            </div>


            <div class="d-grid mt-5">
              <button type="submit" class="btn btn-success btn-login" name="submit">Update</button>
            </div>


          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div id="cursor"></div>

  <script src="js/cursor.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>