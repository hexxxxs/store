<?php
session_start();


require "functions.php";


if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {

      //mengeset session
      $_SESSION["login"] = true;
      header("Location: index.php");
      exit;
    }
  }
  $error = true;
}

?>





<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>halaman login user</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="aset/allstore.jpg" />


</head>

<body>

  <?php if (isset($error)) : ?>
    <div class="alert alert-danger text-center" role="alert">
      username / password salah
    </div>
  <?php endif; ?>

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
          <h2 class="card-title text-center">Login</h2>
          <h6 class="card-subtitle text-center text-muted mb-5 fw-bold">Login untuk masuk ke Allstore </h6>


          <form action="" method="POST">
            <div class="mb-4">
              <label for="username" class="form-label">username*</label>
              <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="username">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password*</label>
              <input type="password" class="form-control" id="username" name="password" placeholder="password">
            </div>


            <div class="d-grid mt-5">
              <button type="submit" class="btn btn-success btn-login" name="login">Login</button>
            </div>

            <div class="mt-3">
              <label>belum punya akun? <a href="registrasi.php" class="link">Buat akun</a></label>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="cursor"></div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script src="js/cursor.js"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>