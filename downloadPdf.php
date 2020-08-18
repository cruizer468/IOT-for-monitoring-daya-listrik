<?php

  session_start();

	include("koneksi.php");

	include('tcpdf/tcpdf.php');



	$pdf = new TCPDF('P', PDF_UNIT, "A4", true, 'UTF-8', false);

	$pdf->SetMargins(20, 20, 20, 20);

	$pdf->SetAutoPageBreak(TRUE, 20);

	$pdf->SetFont('Times', '', 12);

	$pdf->SetPrintHeader(false);

	$pdf->SetAuthor('MONITORING');

	$pdf->SetTitle('Daya Listrik');

	$pdf->AddPage();

	ob_start();

?>

    <style>

        .bold{ font-weight: bold; }

        .pt12{ font-size: 12pt; }

        .pt14{ font-size: 14pt; }

        .pt16{ font-size: 16pt; }

        .pt18{ font-size: 18pt; }

        .center{ text-align: center;}

    </style>





    <p class="pt18 center">Hasil Monitoring Daya listrik  <br/>

    </p>



    <p class="pt16 center">



    </p>

    <p class="pt16 center">



    </p>

    <p class="pt16 center">



    </p>

    <p class="pt16 center">



    </p>

    <p class="pt16 center">



    <img src="images/Mondalist.png" width="4cm" class="center">



    <p class="pt16 bold center">MODALIST</p>

    <p class="pt14 center">Kelompok 5</p>



    </p>

    <p class="pt16 center">



    </p>

    <p class="pt16 center">



    </p>

    <p class="pt16 center">



    <p class="pt18 center">

    Pemrograman Berbasis Web <br/>

    Institut Pertanian Bogor <br/>

    2019

    </p>

    <?php


    include("koneksi.php");

    $sql_tabel = "SELECT `no`, `daya`,`arus`,`tegangan`, `tanggal` FROM `monitoring`";

    $hasil = $koneksi->query($sql_tabel);

    ?>


<br></br>
  <h2>Hasil Monitoring Daya Listrik </h2>

  <table class="pt12" border="1">

  <tr>
     <th width="1cm">No</th>
     <th>Daya</th>
     <th>Arus</th>
     <th>Tegangan</th>
     <th width="3cm">Tanggal dan Waktu</th>

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


  <?php

	$content = ob_get_contents();

	ob_end_clean();

	$pdf->writeHTML($content, true, false, true, false, '');

	$pdf->Output("MondalistMonitoringReport.pdf", 'I');

?>

