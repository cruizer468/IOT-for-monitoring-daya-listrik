<?php
   session_start();
   if(!isset($_SESSION['username'])) {
   header('location:dashboard.php'); }
?>
<title>Form Pendaftaran</title>
<link rel="stylesheet" type="text/css" href="css/daftar.css">
<body>  
<div align='center'>
  <form action="prosesdaftar.php" method="post">
  <table>
  <tbody>
  <tr><td colspan="2" align="center"><h1>Daftar Baru</h1></td></tr>
  <tr><td>Username</td><td><input name="username" type="text"></td></tr>
  
  <tr><td>Password</td><td><input name="password" type="password"></td></tr>
  <tr>
    <tr>  </tr>
    <tr>  </tr>
    <tr>  </tr>
    <tr>  </tr>
    <tr>  </tr>
    <tr>  </tr>
    <td colspan="5" align="right"><input value="Daftar" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr>
<td></td>
    <td colspan="2" align="center">Sudah Punya akun ? <a href="login.php"><b>Login</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>
</body>