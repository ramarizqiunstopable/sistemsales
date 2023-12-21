<?php
//koneksi ke database   
include "koneksi.php"
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
    <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>
<body>

<h2>Laporan Sales Toko</h2>

<!--awal card tabel-->
<div class="card mt-3">
        </div>
        <div class="card-body">

        <table class="table table-bordered table-striped" id="dataTables-example">
        <thead>    
                 <tr>
                         <th>No</th>
                         <th>Tanggal</th>
                         <th>Kode Toko</th>
                         <th>Nama Toko</th>
                         <th>Nama Kasir</th>
                         <th> RAB</th>
                         <th>SPD</th>
                         <th>STD</th>
                         <th>APC</th>
                         <th>Margin</th>
                         
                </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
                $tampil = mysqli_query($koneksi, "SELECT * from  t_sales order by kd_toko desc");
                while($data = mysqli_fetch_array($tampil)):?>

            <tr>
                <td><?=$no++;?></td>
                <td><?=$data['tgl']?></td>
                <td><?=$data['kd_toko']?></td>
                <td><?=$data['nm_toko']?></td>
                <td><?=$data['kasir']?></td>
                <td>Rp. <?=$data['RAB']?> ,- </td>
                <td>Rp. <?=$data['spd']?> ,- </td>
                <td><?=$data['std']?> Struk </td>
                <td><?=$data['apc']?></td>
                <td><?=$data['gm']?> % </td>
               
            </tr>
            <?php endwhile; //penutup perulangan while ?>
            <tbody>
        </table>
        <a href="export_pdf_sales.php" class="btn btn-success square-btn-adjust">export to pdf</a>
        <a href="export_excel_sales.php" class="btn btn-success square-btn-adjust">export to excel</a>
        </div>
     </div>
        <!--akhir card Tabel-->
         
       
        


  <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    

        </body>
    </html>
