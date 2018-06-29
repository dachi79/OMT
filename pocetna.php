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
	   <h1> ONE MORE TIME </h1>
	   <h2>STREET WEAR </h2>
	   <br>
	    <br>
	   <h3>NOVA KOLEKCIJA 2016/2017</h3><br>
     <p class="text">Izaberite pravu odeću za vas u kojoj će te moći uživati svaki dan...</p>
     
     <div>
      <div class="tri">
            <a href="muskarci.php">
                <img src="slike/men.jpg" alt="Muško">
                <div class="triTekst">
                <br><br>
                	<h2>Muškarci</h2>
                	<p>Click here for more details</p>
                </div>
            </a>
      </div>
        
            <div class="tri">
            <a href="zene.php">
                <img src="slike/naslovna.jpg" alt="Žensko">
                <div class="triTekst">
                <br><br>
                	<h2>Žene</h2>
                	<p>Click here for more details</p>
                </div>
            </a>
		</div>
        </div> 
           <div id="footer">
            <p> Copyright © OMT</p>
            </div><!--end footer-->
    </div><!--end main-->
  
</div><!--end wrapper-->



</body>
</html>
