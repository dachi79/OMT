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
   <div> <a href="javascript:void()"><img src="slike/logo2.png"></a></div>
	<a class="linkovi" href="javascript:void()">O N E</a>
	<a class="linkovi" href="javascript:void()">M O R E</a>
	<a class="linkovi" href="javascript:void()">T I M E</a>
	<a class="linkovi" href="javascript:void()">O M T</a>
	</div>
</div><!--end meni-->


	<div id="main">
	<div id="social">
           <a href="https://www.facebook.com/onemoretimestreetwear/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/onemoretime_omt/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
   </div><!--end social-->
	   <h1> ONE MORE TIME </h1>
	   <h2>Dobro došli na naš sajt!!!<br>Da nastavite dalje molimo vas ulogujte se...</h2>
	   <br>
	   <form action="modules/login.php" method="post" id="forma1">
	   	<fieldset>
	   		<legend class="leg">LOG IN</legend>
	   		Korisničko ime<br>
	   		<input type="text" name="omtuser" class="user" required>
	   		<br>
	   		Password<br>
	   		<input type="password" name="omtpass" class="user" required>
	   		<br>
	   		<input type="reset" value="Obrisi" class="reset">
	   		<br>
	   		<input type="submit" value="Uloguj se!" name="btnlog"  class="reset" >
	   	</fieldset>
	   </form>
	   
	   <form action="modules/register.php" method="post" id="forma2" onsubmit="return(proveri(this.omtpass,'Password'))" >
	   	<fieldset>
	   		<legend>REGISTER</legend>
	   		Korisničko ime<br>
	   		<input type="text" name="omtime" class="user" required>
	   		<br>
	   		Nadimak<br>
	   		<input type="text" name="omtnadimak" class="user" required>
	   		<br>
			<span style=color:crimson;>email postoji probajte drugi mejl...</span><br>
	   		<input type="email" name="omtemail" class="user" required>
	   		<br>
	   		Password<br>
	   		<input type="password" name="omtpass" class="user" onblur="checkExisting(this)" required>
	   		<br>
	   		<input type="reset" value="Resetuj formu" class="reset" align="">
	   		<br>
	   		<input type="submit" value="Registracija!" name="btnsub" class="reset" >
	   		
	   	</fieldset>
	   </form>
	    
     
            
   
           <div id="footer">
            <p> Copyright © OMT</p>
            </div>
    </div><!--end main-->
  
</div><!--end wrapper-->
<script>

function proveri(ctrl,ctrlname){
	 
	var greska="";
	var us=ctrl.value;
	
	if(us==""){
		greska=ctrlname + "ne moze biti prazno";
	}
	var patt=/[A-Z]+/
	if(!patt.test(us)){
		greska=ctrlname + "mora da sadrzi veliko slovo";
	}
	var patt=/[0-9]+/
	if(!patt.test(us)){
		greska=ctrlname + "mora da sadrzi broj";
	}
	if(greska==""){
		return true;
	} else {
		alert(greska);
		return false;
	}
}


</script>

</body>
</html>
