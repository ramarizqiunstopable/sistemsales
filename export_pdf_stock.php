<?php

    include "koneksi.php";
    include_once "dompdf/autoload.inc.php";

    use Dompdf\Dompdf;
    $dompdf         = new Dompdf();

    $query = mysqli_query($koneksi,"select * from t_stockout order by total desc");
    $html = '<center><h3>Data Laporan Stockout</h3></center><hr/><br/>';
    $html .= '<table border="1" width="100%">
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

            </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
            <td>".$no."</td>
            <td>".$row['tgl']."</td>
            <td>".$row['kd_toko']."</td>
            <td>".$row['nm_toko']."</td>
            <td>".$row['kasir']."</td>
            <td>".$row['e']."</td>
            <td>".$row['d']."</td>
            <td>".$row['s']."</td>
            <td>".$row['l']."</td>
            <td>".$row['b']."</td>
            <td>".$row['total']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";

    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4','potrait');
    $dompdf->render();
    $dompdf->stream('summary_inventory.pdf',array("Attachment"=>0));

?>