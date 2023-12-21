<?php

//koneksi ke database   
$server = "localhost";
$user = "root";
$password = "";
$database= "crud_db";

$koneksi = mysqli_connect($server, $user, $password, $database) or die
(mysqli_error($koneksi));




$ambil = $koneksi -> query ("SELECT * FROM  t_sales WHERE kd_toko= '$_GET[kd_toko]'");
$data = $ambil -> fetch_assoc();


if ($_GET['halaman']=="hapussls")
{
    $hapus= mysqli_query ($koneksi, "DELETE FROM t_sales WHERE kd_toko = '$_GET[kd_toko]'");
    if ($hapus) 
    
    {
        echo "<script>
        alert ('data Sales Telah Dihapus');
        document.location = 'index.php?halaman=sales';</script>";
    }

    }

   


?>
   

 