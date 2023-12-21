<?php


//panggil koneksi database

include "koneksi.php";    

$pass =  ($_POST['password']);
$jabatan = mysqli_escape_string($koneksi, $_POST['jabatan']);
$username = mysqli_escape_string($koneksi, $_POST['username']);
$password = mysqli_escape_string($koneksi, $pass);

//cek username terdaftar atau tidak
$cek_user = mysqli_query($koneksi, "SELECT *FROM t_user WHERE username = 
'$username' and jabatan ='$jabatan' ");
$user_valid = mysqli_fetch_array($cek_user);
// uji jika username terdaftar
if ($user_valid) {
   //jika username terdaftar
   //cek password sesuai atau tidak 
   if ($password == $user_valid['password']){
       //jika password sesuai 
       //buat session
       session_start();
       $_SESSION['username'] = $user_valid['username'];
       $_SESSION['jabatan'] = $user_valid['jabatan'];

       //uji jabatan user
       if($jabatan == "kasir"){
           header('location:index.php?halaman=sales');
         }elseif ($jabatan == "admin") {
           header('location:admin.php?hal=lsales');
       }elseif ($jabatan == "manager") {
           header('location:manager.php');
       }

   }else{
    echo "<script>alert('Maaf Login Gagal, password anda tidak sesuai');
    document.location='login.php'</script>";
}

}else{
    echo "<script>alert('Maaf Login Gagal, username anda tidak terdaftar');
    document.location='login.php'</script>";
}
