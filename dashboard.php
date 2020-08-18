<?php
    session_start();
	if($_SESSION['login'] == false){
		header('Location: login.php');
	}
    include "koneksi.php";
    $sql = "SELECT `no`, `daya`,`arus`,`tegangan`, `tanggal` FROM `monitoring` ORDER BY `tanggal` DESC LIMIT 10";
    $sql_tabel = "SELECT `no`, `daya`,`arus`,`tegangan`, `tanggal` FROM `monitoring`";
    $result = $koneksi->query($sql);
    $hasil = $koneksi->query($sql_tabel);

    $kategori = array();
    $daya = array();
    $arus = array();
    $tegangan = array();
    $tanggal = array();

    while($rc = mysqli_fetch_assoc($result)){
  		array_unshift($kategori,array("label"=>$rc["tanggal"]));
  		array_unshift($daya,array("value"=>$rc["daya"]));
  		array_unshift($arus,array("value"=>$rc["arus"]));
  		array_unshift($tegangan,array("value"=>$rc["tegangan"]));
   	}

    $kategori = json_encode($kategori);
    $daya = json_encode($daya);
    $arus = json_encode($arus);
    $tegangan = json_encode($tegangan);
    ?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="icon" type="images/png" href="images/Mondalist.png">
<title>MODALIST | Dashboard</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/dashboard.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->
   <script type="text/javascript" src="script.js"></script>

      <!--<script type="text/javascript" src="script_fussion.js"></script>
      <script type="text/javascript" src="pustaka_FC/js/fusioncharts.js"></script>
    	<script type="text/javascript" src="pustaka_FC/js/themes/fusioncharts.theme.fint.js"></script>-->
      <script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
      <script src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
    	<script type="text/javascript">
      FusionCharts.ready(function() {
            var visitChart = new FusionCharts({
              type: 'msline',
              renderAt: 'chart-container',
              width: '900',
              height: '400',
              dataFormat: 'json',
              dataSource: {
                "chart": {"theme": "fusion","caption": "Hasil Monitoring daya listrik","xAxisName": "Value"},
                "categories": [{"category": <?php echo $kategori; ?>}],
                "dataset": [
                {"seriesname": "Daya","data": <?php echo $daya; ?>},
                {"seriesname": "Arus","data": <?php echo $arus; ?>},
                {"seriesname": "Tegangan","data": <?php echo $tegangan; ?>},
                ],
                "trendlines": [{
                  "line": [{
                    "color": "#62B58F",
                    "valueOnRight": "1"
                  }]
                }]
              }
            }).render();
          });
    	</script>
   <style>
    h3{
    	 text-align:center;
     }
    table {
    	 border-collapse:collapse;
    	 border-spacing:0;
    	 font-family:Arial, sans-serif;
    	 font-size:16px;
    	 padding-left:300px;
    	 margin:auto;
     }
    table th {
    	 font-weight:bold;
    	 padding:10px;
    	 color:#fff;
    	 background-color:#00a1ff;
    	 border-top:1px #3d3d3d solid;
    	 border-bottom:1px #3d3d3d solid;
     }
    table td {
    	 padding:10px;
    	 border-top:1px #3d3d3d solid;
    	 border-bottom:1px #3d3d3d solid;
    	 text-align:center;
     }
    tr:nth-child(even) {
    	background-color: #DFEBF8;
    }
    </style>

</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
    <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="index.html">Easy <span>Admin</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="index.html"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li class="menu-list">
							<a href="dashboard.php"><i class="lnr lnr-cog"></i>
								<span>Alat</span></a>
								<ul class="sub-menu-list">
									<li><a href="grids.html">Monitoring alat</a> </li>
								</ul>
						</li>
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
		<!-- left side end-->
    
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details_left">
						<ul class="nofitications-dropdown">
						    <h3>MODALIST</h3
							<li
							</li>
							<li class="login_box" id="loginContainer">
								
									
							</li>
							
							</li>		   							   		
							<div class="clearfix"></div>	
						</ul>
					</div>
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(images/user.png) no-repeat center"> </span> 
										 <div class="user-name">
											<p>admin<span>administrator</span>
											</p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="login.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>		
					           	
					<div class="clearfix"></div>
				</div>
			  </div>
			<!--notification menu end -->
			</div>
		<!-- //header-ends -->
			

			<!---//Simpen Grafik di sini aja-->

	<center><section class="white" id="section4">
        	<div id="chart-container">FusionCharts will render here</div>
        	<br/>
        	<center><a style="background-color: #00a1ff; color: white; padding:10px 0px;width: 200px; text-align: center; text-decoration: none; display: inline-block;" href="downloadPdf.php">Download Pdf</a>
            <a style="background-color: #00a1ff; color: white; padding:10px 0px;width: 200px; text-align: center; text-decoration: none; display: inline-block;" href="downloadXlsx.php">Download Excel</a></center>
    </section></center>
    <!-- grafik end -->
    <!-- tabel start -->
    <br></br>
    <table>
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
    <!--tabeel end -->



				

			
					
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			
		</div>
				</div>
			<!--body wrapper start-->
			</div>
			 <!--body wrapper end-->
		</div>
        <!--footer section start-->
			<footer>
			   <p>&MODALIST 2019 | Design by <a href="/https://kelompok5tekap2.000webhostapp.com" target="_blank">KELOMPOK 5 TEK A P2.</a></p>
			</footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>
  
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>