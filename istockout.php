<?php
//koneksi ke database   
$server = "localhost";
$user = "root";
$password = "";
$database= "crud_db";

$koneksi = mysqli_connect($server, $user, $password, $database) or die
(mysqli_error($koneksi));

//jika tombol simpan diklik
if(isset($_POST['bsimpan']))

{
        //data disimpan baru
        $simpan = mysqli_query($koneksi, "INSERT INTO t_stockout ( id, kd_toko, nm_toko, kasir, tgl, e, d, s, l, b, total)
                                        VALUES ('$_POST[id]',
                                                 '$_POST[kd_toko]', 
                                                 '$_POST[tnama]',
                                                 '$_POST[tkasir]',
                                                 '$_POST[tanggal]',
                                                 '$_POST[te]',
                                                '$_POST[td]',
                                                '$_POST[ts]',
                                                '$_POST[tl]',
                                                '$_POST[tb]',
                                                '$_POST[ttotal]')

                        ");

if($simpan) //jika simpan sukses
{
    echo "<script>
    alert('Simpan data Sukses');
    document.location='index.php?halaman=stockout'

</script>";
}
else
{
    echo "<script>
    alert('Simpan data Gagal');
    document.location='index.php?halaman=stockout'

</script>";


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
                    <label > ID:</label>
                    <input type="text" name="id" value="<?=@$vid?>" class="form-control" placeholder="input Kode Toko anda disni" required>
                </div>

           <div class="form-group">
                <label>Tanggal:</label>
                <input type="date"  name="tanggal"  value="<?=@$vtanggal?>"  class="form-control" />
            </div>
            
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
                    <label > Tag E :</label>
                    <input type="text" id="txt1"  onkeyup="sum();" name="te"  value="<?=@$ve?>" class="form-control" placeholder="masukan jumlah tag" required>
                </div>

                <div class="form-group">
                    <label > Tag D :</label>
                    <input type="text" id="txt2"  onkeyup="sum();" name="td" value="<?=@$vd?>" class="form-control" placeholder="masukan jumlah tag" required>
                </div>

                <div class="form-group">
                    <label > Tag S :</label>
                    <input type="text" id="txt3"  onkeyup="sum();" name="ts" value="<?=@$s?>" class="form-control" placeholder="masukan jumlah tag" required>
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
                
                <button type="submit" class="btn btn-primary m-3" name="bsimpan">Simpan</button>
                <button type="reset" class="btn btn-danger" name="breset">kosongkan</button>

           </form>
        </div>
     </div>
        <!--akhir card form-->
<br>
 <!--awal card tabel-->
 <div class="card mt-3">
        </div>
        <div class="modal-view">
		<table class="table table-bordered table-striped" id="dataTables-example">
            <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Kode Toko</th>
            <th>Nama Toko</th>
            <th>Nama Kasir</th>
            <th>E</th>
            <th>D</th>
            <th>S</th>
            <th>L</th>
            <th>Blank</th>
            <th>Total</th>
            <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
                $tampil = mysqli_query($koneksi, "SELECT * from  t_stockout order by kd_toko desc");
                while($data = mysqli_fetch_array($tampil)):
            
                ?>

            <tr>
                <td><?=$no++;?></td>
                <td><?=$data['tgl']?></td>
                <td><?=$data['kd_toko']?></td>
                <td><?=$data['nm_toko']?></td>
                <td><?=$data['kasir']?></td>
                <td><?=$data['e']?></td>
                <td><?=$data['d']?></td>
                <td><?=$data['s']?></td>
                <td><?=$data['l']?></td>
                <td><?=$data['b']?></td>
                <td><?=$data['total']?></td>
                <td>
                    <a href="index.php?halaman=editstc&kd_toko=<?=$data['kd_toko']?>" class= "btn btn-warning">Edit </a>
                    <a href="index.php?halaman=hapusstc&kd_toko=<?=$data['kd_toko']?>"
                     onclick="return confirm('Apakah yakin data ini ingin dihapus?')" class= "btn btn-danger">Hapus </a>
            
            </td>
            </tr>
            <?php endwhile; //penutup perulangan while ?>
        </table>
           
        </div>
     </div>
        <!--akhir card Tabel-->
        <div class="clearfix" style="margin-top:7pc;"></div>

        <script type="text/javascript "src="js/bootstrap.min.js"></script>
        </body>
    </html>


    
