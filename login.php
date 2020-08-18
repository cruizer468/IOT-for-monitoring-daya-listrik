<?php
  session_start();
  $_SESSION['login'] = false;
?>
<!DOCTYPE html>
<html>
   <head>
       <link rel="icon" type="image/png" href="images/Mondalist.png">
      <title>Login | MODALIST </title>
      
      
      <script>
         addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
      </script>
     
      <link href="css/login.css" rel='stylesheet' type='text/css' media="all">
      
      <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
   </head>
   <body>
      <div class="mid-class">
         <div class="art-right-w3ls">
            <h2>Login Modalist</h2>
            <form action="proseslogin.php" method="post">
               <div class="main">
                  <div class="form-left-to-w3l">
                     <input type="text" name="username" class="form_login" placeholder="Username" required="">
                  </div>
                  <div class="form-left-to-w3l ">
                     <input type="password" name="password" class="form_login" placeholder="Password"required="">
                     <div class="clear"></div>
                  </div>
               </div>
               
               <div class="clear"></div>
               <div class="btnn">
                  <button type="submit" class="tombol_login" value="LOGIN">Masuk</button>
               </div>
            </form>
            <div class="w3layouts_more-buttn">
               <h3>Tidak Punya Akun..?
               <div class="btnn">
                  <button type="submit">
                  <a href="#content1">Daftar
                  </a></button>
                  </div>
               </h3>
               <div class="btnn">
                  <button type="submit">
                  <a href="index.html">Kembali
                  </a></button>
                  </div>
            </div>
            <!-- popup-->
            <div id="content1" class="popup-effect">
               <div class="popup">
                  <!--login form-->
                  <div class="letter-w3ls">
                     <form action="prosesdaftar.php" method="post">
                        <div class="form-left-to-w3l">
                           <input type="text" name="name" placeholder="Nama Lengkap" required="">
                        </div>
                        <div class="form-left-to-w3l">
                           <input type="text" name="email" placeholder="E-Mail" required="">
                        </div>
                        
                        <div class="form-left-to-w3l">
                           <input type="text" name="username" placeholder="Username" required="">
                        </div>
                        <div class="form-left-to-w3l">
                           <input type="password" name="password" placeholder="Password" required="">
                        </div>
                        <div class="btnn">
                           <button value="Daftar" type="submit">Daftar</button>
                           <br>
                        </div>
                     </form>
                     <div class="clear"></div>
                  </div>
                  <!--//login form-->
                  <a class="close" href="#">&times;</a>
               </div>
            </div>
            <!-- //popup -->
         </div>
         <div class="art-left-w3ls">
            <h1 class="header-w3ls">
               MODALIST (Monitoring Daya Listrik)
            </h1>
         </div>
      </div>
   
   </body>
</html>