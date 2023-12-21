<?php

    include "koneksi.php";
    include_once "dompdf/autoload.inc.php";

    use Dompdf\Dompdf;
    $dompdf         = new Dompdf();

    $query = mysqli_query($koneksi,"select * from t_sales order by spd asc");
    $html = '<center><h3>Data Laporan Sales</h3></center><hr/><br/>';
    $html .= '<table border="1" width="100%">
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
            <td>".$row['spd']."</td>
            <td>".$row['std']."</td>
            <td>".$row['apc']."</td>
            <td>".$row['gm']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";

    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4','potrait');
    $dompdf->render();
    $dompdf->stream('summary_inventory.pdf',array("Attachment"=>0));

?>