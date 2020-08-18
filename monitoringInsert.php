<?php
	include_once ("koneksi.php");
	$ok=true;
	$daya=$_GET["daya"];
	$arus=$_GET["arus"];
	$tegangan=$_GET["tegangan"];
		if(!$ok){
		echo "error";
		exit();}
	
/*
	if(empty($_GET["arus"])){
		$ok=false;} else $id_lokasi=$_GET["arus"];

	if(empty($_GET["tegangan"])){
		$ok=false;} else $suhu=$_GET["tegangan"];
	if(!$ok){
		echo "error";
		exit();}
*/

	$sql = "INSERT INTO `monitoring` (`daya`,`arus`, `tegangan`) VALUES ('$daya','$arus','$tegangan')";
	$hasil = mysqli_query($koneksi,$sql);
?>
