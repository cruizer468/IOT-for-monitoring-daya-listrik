<?php
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $koneksi->query($sql);
   if($query->num_rows != 0) {
     echo "
        <script type='text/javascript'>
        alert('Username Sudah terdaftar');
        history.back(self);
        </script>";
   } else {
     if(!$username || !$pass) {
echo "<script>alert('Masih Ada Data Yang Kosong')
history.back(self);
</script>";

     } else {
       $data = "INSERT INTO user VALUES (NULL, '$username', '$pass')";
       $simpan = $koneksi->query($data);
       if($simpan) {
         echo "
        <script type='text/javascript'>
        alert('Pendaftaran Sukses');
        history.back(self);
        </script>";
       } else {
         echo "
        <script type='text/javascript'>
        alert('Pendaftaran Gagal');
        history.back(self);
        </script>";
       }
     }
   }
?>