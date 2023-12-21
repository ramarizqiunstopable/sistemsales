<?php 
include 'koneksi.php';
?>

<table border="1">
	<tr>
				<th>No</th>
                <th>Tanggal</th>
                <th>Kode Toko</th>
                <th>Nama Toko</th>
                <th>Nama Kasir</th>
                <th>Tag E</th>
                <th>Tag D</th>
                <th>Tag S</th>
                <th>Tag L</th>
                <th>Tag Blank</th>
                <th>Total Stock Out</th>

	</tr>
	<?php 
	$data = mysqli_query($koneksi ,"select * from t_stockout"); 
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['tgl']; ?></td>
		<td><?php echo $d['kd_toko']; ?></td>
		<td><?php echo $d['nm_toko']; ?></td>
		<td><?php echo $d['kasir']; ?></td>
		<td><?php echo $d['e']; ?></td>
		<td><?php echo $d['d']; ?></td>
		<td><?php echo $d['s']; ?></td>
		<td><?php echo $d['l']; ?></td>
        <td><?php echo $d['b']; ?></td>
        <td><?php echo $d['total']; ?></td>
		
	</tr>
	<?php
	} 
	?>
</table>