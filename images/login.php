<!DOCTYPE html>
<html>
   <head>
      <title>Login | MODALIST </title>
      <!-- Meta tags -->
      
      <script>
         addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
      </script>
      <!-- Meta tags -->
      <!--stylesheets-->
      <link href="css/login.css" rel='stylesheet' type='text/css' media="all">
      
      <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
   </head>
   <body>
      <div class="mid-class">
         <div class="art-right-w3ls">
            <h2>Sign In and Sign Up</h2>
            <form actionaction="proseslogin.php" method="post">
               <div class="main">
                  <div class="form-left-to-w3l">
                     <input type="text" name="username" placeholder="Username" required="">
                  </div>
                  <div class="form-left-to-w3l ">
                     <input type="password" name="password" placeholder="Password" required="">
                     <div class="clear"></div>
                  </div>
               </div>
               
               <div class="clear"></div>
               <div class="btnn">
                  <button type="submit">Sign In</button>
               </div>
            </form>
            <div class="w3layouts_more-buttn">
               <h3>Don't Have an account..?
                  <a href="#content1">Sign Up Here
                  </a>
               </h3>
            </div>
            <!-- popup-->
            <div id="content1" class="popup-effect">
               <div class="popup">
                  <!--login form-->
                  <div class="letter-w3ls">
                     <form action="prosesdaftar.php" method="post">
                        <div class="form-left-to-w3l">
                           <input type="text" name="name" placeholder="Username" required="">
                        </div>
                        <div class="form-left-to-w3l">
                           <input type="password" name="password" placeholder="Password" required="">
                        </div>
                        <div class="form-left-to-w3l margin-zero">
                           <input type="password" name="password" placeholder="Confirm Password" required="">
                        </div>
                        <div class="btnn">
                           <button type="submit">Sign Up</button>
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