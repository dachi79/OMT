<?php
require "config.php";
session_start();
if(!isset($_SESSION['name'])){
	header("location:index.php");
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>OMT</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"> 
<link href="font8/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link id="favicon" rel="shortcut icon" href="slike/logo.ico" type="image/x-icon" />
<link href="stil.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- // IE  // -->
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
</head>

<body>
<div id="wrapper">
<div id="naslovna">
    
    <div id="menu">
   <div> <a href="pocetna.php"><img src="slike/logo2.png"></a></div>
	<a class="linkovi" href="pocetna.php">POČETNA</a>
	<a class="linkovi" href="muskarci.php">MUŠKARCI</a>
	<a class="linkovi" href="zene.php">ŽENE</a>
	<a class="linkovi" href="onama.php">O NAMA</a>
	</div>
</div>


	<div id="main">
	<div id="korisnik">
	   <p>Welcome: <span style="color:crimson;"><?=$_SESSION['nadimak'];?><a href="modules/logout.php" > [Logout]</a></p>
	</div>
    <div id="social">
           <a href="https://www.instagram.com/onemoretime_omt/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
           <a href="https://www.facebook.com/onemoretimestreetwear/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
	</div>
	   <h1>Za Lepši pol !!! </h1>
	   <h2>Ženski modeli za svaki dan...</h2>
	   <br><br>
	 
<?php
    $conn=db::getConnection();
	$res=$conn->query("select * from zene");
	foreach($res as $majce){
?>		 
		 <div id="odeca">
		 	<div class="odeca1">
		 		<p>Model * <?= $majce['naziv']?></p>
		 	</div>
			<div class="odeca2">
				<p>Cena = <?= $majce['cena'] ?> dinara</p>
				<p>Boja : <?= $majce['boja'] ?></p>
			</div>
			<img src="slike/woman/<?= $majce['slika'] ?>"  alt="slika" />
		 </div>  
<?php
	}
?>           
           
           <div id="footer">
            <p> Copyright © OMT</p>
            </div>
    </div>
  
</div>



</body>
</html>
