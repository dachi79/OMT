<?php
require "../config.php";
session_start();
if(!isset($_SESSION['name'])){
	header("location:../index.php");
}
if($_SESSION['status']!=2){
	header("location:../pocetna.php");
}
?>
<h2>Welcome <?=$_SESSION['nadimak'];?></h2>
<a style=font-size:22px;color:purple; href="korisnici.php";>#Korisnici</a><br><br>
<a style=font-size:22px;color:purple; href="muskaodeca.php";>#Muskarci</a><br><br>
<a style=font-size:22px;color:purple; href="zenskaodeca.php";>#Žene</a><br><br><br>
<a style=font-size:22px;color:red; href="../modules/logout.php" > [Logout]</a>
<br><br><br>

<a style=font-size:22px;color:blue; href="../pocetna.php" target="_blank">pocetna</a><br><br>
<a style=font-size:22px;color:blue; href="../muskarci.php" target="_blank">muskarci</a><br><br>
<a style=font-size:22px;color:blue; href="../zene.php" target="_blank">zene</a>