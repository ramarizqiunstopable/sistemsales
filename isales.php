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
         
        //data kan disimpan baru
        $simpan = mysqli_query($koneksi, "INSERT INTO t_sales ( id, kd_toko, nm_toko, kasir, tgl,RAB, spd, std, apc, gm)
                                        VALUES ('$_POST[id]',
                                                '$_POST[kd_toko]', 
                                                 '$_POST[tnama]',
                                                 '$_POST[tkasir]',
                                                 '$_POST[tanggal]',
                                                 '$_POST[trab]',
                                                 '$_POST[tspd]',
                                                '$_POST[tstd]',
                                                '$_POST[tapc]',
                                                '$_POST[tmargin]')

                        ");

            if($simpan) //jika simpan sukses
            {
                echo "<script>
                alert('Simpan data Sukses');
                document.location='index.php?halaman=sales'

            </script>";
            }
            else
            {
                echo "<script>
                alert('Simpan data Gagal');
                document.location='index.php?halaman=sales'

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
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>


<script>
function ach() {
      var txtFirstNumberValue = document.getElementById('txt1').value;
      var txtSecondNumberValue = document.getElementById('txt2').value;
      
      var result =  parseFloat(txtSecondNumberValue) / parseFloat(txtFirstNumberValue)  * 100;
      if (!isNaN(result)) {
         document.getElementById('txt5').value = result;
         
      }
}

function devide() {
      var txtSecondNumberValue = document.getElementById('txt2').value;
      var txtThirdNumberValue = document.getElementById('txt3').value;
      
      var result =  parseFloat(txtSecondNumberValue) / parseFloat(txtThirdNumberValue)  ;
      if (!isNaN(result)) {
         document.getElementById('txt4').value = result;
         
      }
}






</script>









<body>

<h2>form input data sales</h2>

 <!--awal card form-->
 <div class="card mt-3">
            <div class="card-whereheader bg-primary text-white fs-3">

        </div>
        <div class="card-body">
           <form method="post" action="">

           <div class="card-body">
           <form method="post" action="">
         
           
           <div class="form-group">
                    <label > ID :</label>
                    <input type="text" name="id" value="<?=@$vid?>" class="form-control" placeholder="input Kode Toko anda disni" required>
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
                    <label>Tanggal:</label>
                     <input type="date"  name="tanggal"  value="<?=@$vtanggal?>"  class="form-control" />
                 </div>

                 <div class="form-group">
                    <label > RAB :</label>
                    <input type="text" id="txt1"  onkeyup="ach();" name="trab"  value="<?=@$vrab?>" class="form-control" placeholder="masukan RAB Toko" required>
                </div>

                <div class="form-group">
                    <label > SPD :</label>
                    <input type="text" id="txt2"  onkeyup="ach();"  name="tspd"  value="<?=@$vspd?>" class="form-control" placeholder="masukan sales hari ini" required>
                </div>

                <div class="form-group">
                    <label > STD :</label>
                    <input type="text" id="txt3"  onkeyup="devide();"name="tstd" value="<?=@$vstd?>" class="form-control" placeholder="Masukan std disni" required>
                </div>

                <div class="form-group">
                    <label > APC :</label>
                    <input type="text" id="txt4"   name="tapc" value="<?=@$vapc?>" class="form-control" placeholder="Masuk apc disni" required>
                </div>

                <div class="form-group">
                    <label > MARGIN :</label>
                    <input type="text" id="txt5" name="tmargin" value="<?=@$vmargin?>" class="form-control" placeholder="Masuk margin disni" required>
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
        <div class="card-body">

        <table class="table table-bordered table-striped">
            <tr>
            <th>No</th>
            <th>Kode Toko</th>
            <th>Nama Toko</th>
            <th>Nama Kasir</th>
            <th>Tanggal</th>
            <th>RAB </th>
            <th>SPD</th>
            <th>STD</th>
            <th>APC</th>
            <th>Margin</th>
            <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
                $tampil = mysqli_query($koneksi, "SELECT * from  t_sales order by kd_toko desc");
                while($data = mysqli_fetch_array($tampil)):
                
                            
                ?>

            <tr>
                <td><?=$no++;?></td>
                <td><?=$data['kd_toko']?></td>
                <td><?=$data['nm_toko']?></td>
                <td><?=$data['kasir']?></td>
                <td><?=$data['tgl']?></td>
                <td>Rp. <?=$data['RAB']?> ,- </td>
                <td>Rp. <?=$data['spd']?> ,- </td>
                <td><?=$data['std']?> Struk </td>
                <td><?=$data['apc']?></td>
                <td><?=$data['gm']?> % </td>
                <td>
                    <a href="index.php?halaman=editsls&kd_toko=<?=$data['kd_toko']?>" class= "btn btn-warning">Edit </a>
                    <a href="index.php?halaman=hapussls&kd_toko=<?=$data['kd_toko']?>"
                     onclick="return confirm('Apakah yakin data ini ingin dihapus?')" class= "btn btn-danger">Hapus </a>
            
            </td>
            </tr>
            <?php endwhile; //penutup perulangan while ?>
        </table>
           
        </div>
     </div>
        <!--akhir card Tabel-->
       


       
        </body>
    </html>
