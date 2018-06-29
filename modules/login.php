<?php
require "../config.php";

session_start();

$so="Omt_adaačsodj_ASAD5611_sadsjha__askhjds";

$username=$_POST['omtuser'];
$password=md5($_POST['omtpass'].$so);

$username=str_replace("'","",$username);
$username=str_replace("-","",$username);
$username=str_replace("<","",$username);		
$username=str_replace(">","",$username);	
$password = str_replace("'","",$password);
$password = str_replace("-","",$password);
$password = str_replace("<","",$password);
$password = str_replace(">","",$password);

$conn=db::getConnection();

$res=$conn->query("select * from users where ime='{$username}' and password='{$password}'limit 1");

$user=$res->fetch(PDO::FETCH_OBJ);
 

 
if($user && $user->status==2){
	$_SESSION['name']= $user->ime;
	$_SESSION['nadimak']= $user->nadimak;
	$_SESSION['status']= $user->status;
	header("location:../pocetna.php");
} else if ($user && $user->status==3){
	$_SESSION['name']= $user->ime;
	$_SESSION['nadimak']= $user->nadimak;
	$_SESSION['status']= $user->status;
	header("location:../admin/admin.php");
} else if ($user && $user->status==1){
	echo "<p style='font-size:50px;text-align: center;'>Vi ste banovani,ne možete se logovati na sajt !!!</p>";
	header( "refresh:3;url=../index.php" );
} else {
	echo "<p style='font-size:50px;text-align: center;'>Wrong username or password !!!</p>";
	header( "refresh:2;url=../index.php" );
}
