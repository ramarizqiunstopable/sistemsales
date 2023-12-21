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
    if($_GET['halaman']== "editsls")
    {

            //data akan diedit
        $edit = mysqli_query($koneksi, " UPDATE t_sales set 
                                        kd_toko = '$_POST[kd_toko]',
                                        nm_toko = '$_POST[tnama]',
                                        kasir = '$_POST[tkasir]',
                                        tgl = '$_POST[tanggal]',
                                        RAB = '$_POST[trab]',
                                        spd = '$_POST[tspd]',
                                        std = '$_POST[tstd]',
                                        apc = '$_POST[tapc]',
                                        gm = '$_POST[tmargin]'

                                        WHERE kd_toko = '$_GET[kd_toko]'


                                    ");

if($edit) //jika edit sukses
{
echo "<script>
alert('Edit data Sukses');
document.location='index.php?halaman=sales'

</script>";
}
else
{
echo "<script>
alert('Edit data Gagal');
document.location='index.php?halaman=sales'

</script>";


}
    }
    
    


    
        
}

// Pengujian jika tombol edit / hapus  diklik
if (isset($_GET ['halaman']))
{
    if($_GET['halaman']== "editsls")
    {
        $tampil = mysqli_query($koneksi, "SELECT * FROM t_sales WHERE kd_toko = '$_GET[kd_toko]' ");
        $data = mysqli_fetch_array($tampil);
        if($data)
        {
            //jika data ditemukan, maka data dtampung kedalam variabel
            
            $vkd_toko = $data['kd_toko'];
            $vnama = $data['nm_toko'];
            $vkasir = $data['kasir'];
            $vtanggal = $data['tgl'];
            $vrab = $data['RAB'];
            $vspd = $data['spd'];
            $vstd = $data['std'];
            $vapc = $data['apc'];
            $vmargin =$data['gm'];
        }
    }
    
    }
    
 
 
 ?>



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
                    <input type="text" id="txt1"  onkeyup="ach();" name="trab"  value="<?=@$vrab?>" class="form-control" placeholder="masukan RAB toko" required>
                </div>

                <div class="form-group">
                    <label > SPD :</label>
                    <input type="text" id="txt2"  onkeyup="ach();"  name="tspd"  value="<?=@$vspd?>" class="form-control" placeholder="masukans sales hari ini" required>
                </div>

                <div class="form-group">
                    <label > STD :</label>
                    <input type="text" id="txt3"  onkeyup="devide();"name="tstd" value="<?=@$vstd?>" class="form-control" placeholder="Masuk std disni" required>
                </div>

                <div class="form-group">
                    <label > APC :</label>
                    <input type="text" id="txt4"   name="tapc" value="<?=@$vapc?>" class="form-control" placeholder="Masuk apc disni" required>
                </div>

                <div class="form-group">
                    <label > MARGIN :</label>
                    <input type="text" id="txt5" name="tmargin" value="<?=@$vmargin?>" class="form-control" placeholder="Masuk margin disni" required>
                </div>
                
                <button type="submit" class="btn btn-primary m-3" name="bedit">Edit</button>
                <button type="reset" class="btn btn-danger" name="breset">kosongkan</button>

           </form>
        </div>
     </div>
        <!--akhir card form-->

       


       
        </body>
    </html>
