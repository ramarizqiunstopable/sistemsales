<?php

//koneksi ke database   
$server = "localhost";
$user = "root";
$password = "";
$database= "crud_db";

$koneksi = mysqli_connect($server, $user, $password, $database) or die
(mysqli_error($koneksi));

//jika tombol simpan diklik
if(isset($_POST['bedit']))
{   
    //pengujian apakah data akan diedit atau disimpan baru
    if($_GET['halaman']== "editstc")
    {

            //data akan diedit
        $edit = mysqli_query($koneksi, " UPDATE t_stockout set 
                                        kd_toko = '$_POST[kd_toko]',
                                        nm_toko = '$_POST[tnama]',
                                        kasir = '$_POST[tkasir]',
                                        tgl = '$_POST[tanggal]',
                                        e = '$_POST[te]',
                                        d = '$_POST[td]',
                                        s = '$_POST[ts]',
                                        l = '$_POST[tl]',
                                        b = '$_POST[tb]',
                                        total = '$_POST[ttotal]'

                                        WHERE kd_toko = '$_GET[kd_toko]'


                                    ");

if($edit) //jika edit sukses
{
echo "<script>
alert('Edit data Sukses');
document.location='index.php?halaman=stockout'

</script>";
}
else
{
echo "<script>
alert('Edit data Gagal');
document.location='index.php?halaman=stockout'

</script>";


}
    }
    
    


    
        
}

// Pengujian jika tombol edit / hapus  diklik
if (isset($_GET ['halaman']))
{
    if($_GET['halaman']== "editstc")
    {
        $tampil = mysqli_query($koneksi, "SELECT * FROM t_stockout WHERE kd_toko = '$_GET[kd_toko]' ");
        $data = mysqli_fetch_array($tampil);
        if($data)
        {
            //jika data ditemukan, maka data dtampung kedalam variabel
            
            $vkd_toko = $data['kd_toko'];
            $vnama = $data['nm_toko'];
            $vkasir = $data['kasir'];
            $vtanggal = $data['tgl'];
            $ve = $data['e'];
            $vd = $data['d'];
            $vs = $data['s'];
            $vl =$data['l'];
            $vb =$data['b'];
            $vtotal =$data['total'];
        }
    }
    
    }
    
 
 ?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<script>
function sum() {
      var txtFirstNumberValue = document.getElementById('txt1').value;
      var txtSecondNumberValue = document.getElementById('txt2').value;
      var txtThirdNumberValue = document.getElementById('txt3').value;
      var txtFourthNumberValue = document.getElementById('txt4').value;
      var txtFifthNumberValue = document.getElementById('txt5').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue)
      + parseInt(txtThirdNumberValue) + parseInt(txtFourthNumberValue) + parseInt(txtFifthNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt6').value = result;
      }
}
</script>












<body>


<h2>Form Input Data Stock Out </h2>


 <!--awal card form-->
 <div class="card mt-3">
            <div class="card-whereheader bg-primary text-white fs-3">

        </div>
        <div class="card-body">
           <form method="post" action="">

           <div class="card-body">
           <form method="post" action="">
           
           
            
               <div class="form-group">
                    <label > Kode Toko :</label>
                    <input type="text" name="kd_toko" value="<?=@$vkd_toko?>" class="form-control" placeholder="input Kode Toko anda disni" required>
                </div>

                <div class="form-group">
                    <label > Nama Toko :</label>
                    <input type="text" name="tnama" value="<?=@$vnama?>"class="form-control" placeholder="Masuk nama toko disni" required>
                </div>

                <div class="form-group">
                    <label > Nama Kasir :</label>
                    <input type="text" name="tkasir" value="<?=@$vkasir?>" class="form-control" placeholder="Masuk nama anda disni" required>
                </div>

                <div class="form-group">
                    <label>Tanggal:</label>
                     <input type="date"  name="tanggal"  value="<?=@$vtanggal?>"  class="form-control" />
                </div>

                <div class="form-group">
                    <label > Tag E :</label>
                    <input type="text" id="txt1"  onkeyup="sum();" name="te"  value="<?=@$ve?>" class="form-control" placeholder="masukan jumlah tag" required>
                </div>

                <div class="form-group">
                    <label > Tag D :</label>
                    <input type="text" id="txt2"  onkeyup="sum();" name="td" value="<?=@$vd?>" class="form-control" placeholder="masukan jumlah tag" required>
                </div>

                <div class="form-group">
                    <label > Tag S :</label>
                    <input type="text" id="txt3"  onkeyup="sum();" name="ts" value="<?=@$vs?>" class="form-control" placeholder="masukan jumlah tag" required>
                </div>

                <div class="form-group">
                    <label > Tag L :</label>
                    <input type="text" id="txt4"  onkeyup="sum();" name="tl" value="<?=@$vl?>" class="form-control" placeholder="masukan jumlah tag" required>
                </div>

                <div class="form-group">
                    <label > Tag B :</label>
                    <input type="text" id="txt5"  onkeyup="sum();" name="tb" value="<?=@$vb?>" class="form-control" placeholder="masukan jumlah tag" required>
                </div>

                <div class="form-group">
                    <label > Total:</label>
                    <input type="text" id="txt6"  name="ttotal" value="<?=@$vtotal?>" class="form-control" placeholder="masukan total tag" required>
                </div>
                
                <button type="submit" class="btn btn-primary m-3" name="bedit">Edit</button>
                <button type="reset" class="btn btn-danger" name="breset">kosongkan</button>

           </form>
        </div>
     </div>
        <!--akhir card form-->

</body>
</html>