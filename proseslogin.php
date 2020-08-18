<?php

   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];   
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $koneksi->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<script type='text/javascript'>
        alert('Username Tidak Terdaftar');
        history.back(self);
        </script>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<script type='text/javascript'>
        alert('Password Salah!');
        history.back(self);
        </script>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       $_SESSION['login'] = true;
       header('location:dashboard.php');
     }
   }
?>