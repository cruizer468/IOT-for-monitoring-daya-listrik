<?php
  session_start();
	include("koneksi.php");
  $sql_tabel = "SELECT `no`, `daya`,`arus`,`tegangan`, `tanggal` FROM `monitoring`";
  $hasil = $koneksi->query($sql_tabel);
   header('Content-Disposition: attachment; filename="MODALIST_Monitoring_Report.xls"');
	 header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
?>
<h2>Hasil Monitoring Daya listrik</h2>
<table border='1'>
<tr>
   <th>No</th>
   <th>Daya</th>
   <th>Arus</th>
   <th>Tegangan</th>
   <th>Tanggal dan Waktu</th>
</tr>
<?php

$no = 1;
while($row=$hasil->fetch_assoc())
{
   echo "<tr>";
   echo "<td>".$no."</td>";
   echo "<td>".$row['daya']." watt</td>";
   echo "<td>".$row['arus']." A</td>";
   echo "<td>".$row['tegangan']." volt</td>";
   echo "<td>".$row['tanggal']."</td>";
   echo "</tr>";

   $no ++;
}
?>
</table>

