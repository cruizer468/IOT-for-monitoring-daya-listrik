<?php
   require_once("koneksi.php");
   $namapelapor = $_POST['namapelapor'];
   $masalah = $_POST['masalah'];
   $isimasalah = $_POST['isi'];
   $data = "INSERT INTO pengaduan(id, namapelapor, masalah, isi) VALUES (NULL,'$namapelapor','$masalah','$isimasalah')";
   $simpan = $koneksi->query($data);
   if($simpan) {
        echo "<script type='text/javascript'>
        alert('Terimakasih Sudah Melapor');
        history.back(self);
        </script>";
       } else {
         echo "
        <script type='text/javascript'>
        alert('Tidak Dapat Melapor');
        history.back(self);
        </script>";
       }
?>