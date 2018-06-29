<?php
session_start();
//Da li je korisnik uspesno ulogovan
if(!isset($_SESSION['name'])){
	header("location:../index.php");
}
echo "<p style='font-size:50px;text-align: center;'>REGISTROVANJE JE USPESNO IZVRSENO!!!</p>";

header( "refresh:3;url=../pocetna.php" );

?>