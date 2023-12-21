<?php
//koneksi ke database   
$server = "localhost";
$user = "root";
$password = "";
$database= "crud_db";

$koneksi = mysqli_connect($server, $user, $password, $database) or die
(mysqli_error($koneksi));

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Report IDM</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
     <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/signin.css" rel="stylesheet">
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body class="text-center">
<main class="form-signin" method= "POST" action="cek_login.php">
  <form action="cek_login.php" method="post">
    <img class="mb-4" src="assets/img/Logo Indomaret.png" alt="" width="150" height="65">
    <h1 class="h3 mb-3 fw-normal">LOGIN SISTEM </h1>
    <p>Pilih Jabatan Anda</p>

    <div class="form-floating">
      <select class="form-control"name="jabatan">
        <option value="kasir">kasir</option>
        <option value="admin">admin</option>
        <option value="manager">manager</option>
      </select>
    </div>

    <div class="form-floating">
      <input type="text" class="form-control" name="username" placeholder="masukan username Anda">
      <label>Masukan username Anda</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control"  placeholder="mmasukan Password Anda">
      <label>Masukan Password Anda</label>
    </div>

    <div class="checkbox mb-3" >
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; Indomaret Cabang Tangerang 2021</p>
  </form>
</main>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
