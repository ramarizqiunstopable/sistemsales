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
                <th>SPD</th>
                <th>STD</th>
                <th>APC</th>
                <th>Margin</th>

	</tr>
	<?php 
	$data = mysqli_query($koneksi ,"select * from t_sales"); 
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['tgl']; ?></td>
		<td><?php echo $d['kd_toko']; ?></td>
		<td><?php echo $d['nm_toko']; ?></td>
		<td><?php echo $d['kasir']; ?></td>
		<td><?php echo $d['spd']; ?></td>
		<td><?php echo $d['std']; ?></td>
		<td><?php echo $d['apc']; ?></td>
		<td><?php echo $d['gm']; ?></td>
		
	</tr>
	<?php
	} 
	?>
</table>