<?php

require "functions.php";


if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "
            <script>
            alert('user baru berhasil ditambahkan!!');
            document.location.href =  'login.php';
            </script>  
            ";
  } else {
    echo mysqli_error($conn);
  }
}

?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>halaman register</title>
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
          <h2 class="card-title text-center">Registrasi</h2>
          <h6 class="card-subtitle text-center text-muted mb-5 fw-bold">Buat akun baru</h6>


          <form action="" method="POST">
            <div class="mb-4">
              <label for="username" class="form-label">username*</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Your username">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password*</label>
              <input type="password" class="form-control" id="username" name="password" placeholder="password">
            </div>
            <div class="mb-3">
              <label for="password2" class="form-label">Konfirmasi Password*</label>
              <input type="password" class="form-control" id="password2" name="password2" placeholder="konfirmasi password">
            </div>


            <div class="d-grid mt-5">
              <button type="submit" class="btn btn-success btn-login" name="register">register</button>
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