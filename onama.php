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
	</div><!--end korisnik-->
     <div id="social">
           <a href="https://www.instagram.com/onemoretime_omt/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
           <a href="https://www.facebook.com/onemoretimestreetwear/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
	</div><!--end social-->
	   <img src="slike/222.jpg">
	   <br><br>
	   <p class="text">
	   	Mi predstavljamo brend "One More Time" motivacionu sportsku odeću koja insipirise vas i druge ljude. Naše majice su napravljene od 100 % pamuka,sve majice su ručne izrade.Poručivanje majci možete izvršiti putem naše stranice na facebook-u ili instagram-u ! Hvala vam na podršci i nadamo se da ćete uživati u našim proizvodima...
	   </p>
	   <br><br>
	      <h2>Our Fashion...</h2>
	   <video id="video1" controls>
	   	<source src="video/One More Time.mp4" type="video/mp4">
	   </video>
	  <br><br><br>
	   <h2>Our Special BulletProof Edition...</h2>
	   <video id="video2" controls>
	   	<source src="video/Train Hard to be Bulletproof.mp4" type="video/mp4">
	   </video>
   		<br><br>
   		<br>
	<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.0742427002842!2d20.367529915956347!3d44.79967557909881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a6f1268496585%3A0xc1b96e1967b99904!2z0JTRgCDQmNCy0LDQvdCwINCg0LjQsdCw0YDQsCA2Nywg0JHQtdC-0LPRgNCw0LQ!5e0!3m2!1ssr!2srs!4v1499023518161" frameborder="0" style="border:2" allowfullscreen></iframe>
   

   

          
          
           <div id="footer">
            <p> Copyright © OMT</p>
            </div><!--end footer-->
    </div><!--end main-->
  
</div><!--end wrapper-->



</body>
</html>
