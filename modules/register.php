<?php
require "../config.php";


$so="Omt_adaačsodj_ASAD5611_sadsjha__askhjds";

if(isset($_POST['omtime'])&&isset($_POST['omtnadimak'])&&isset($_POST['omtemail'])&&isset($_POST['omtpass'])){
	$username=$_POST['omtime'];
	$nickname=$_POST['omtnadimak'];
	$email=$_POST['omtemail'];
	$password=md5($_POST['omtpass'].$so);
	
	$username=str_replace("'","",$username);
	$username=str_replace("-","",$username);
	$username=str_replace("<","",$username);		
	$username=str_replace(">","",$username);	
	$email=str_replace("'","",$email);
	$email=str_replace("-","",$email);
	$password = str_replace("'","",$password);
    $password = str_replace("-","",$password);
	$password = str_replace("<","",$password);
	$password = str_replace(">","",$password);
	
	}
	//ovde mozes izvrsiti proveru 
	//da li postoji korisnik ili email vec
	
	//ako postoji, die("Korisnik vec postoji");
	

	
$conn=db::getConnection();

$res=$conn->query("select * from users where ime='{$username}' or email='{$email}'");

$svi=$res->fetch(PDO::FETCH_OBJ);




if($svi->ime==$username){
	sleep(1);
	header("location:../aleuser.php");
	die();
}elseif($svi->email==$email){
	sleep(1);
	header("location:../alemail.php");
	die();
} else {
	$user = new users;
	$user->ime = $username;
	$user->nadimak = $nickname;
	$user->email = $email;
	$user->password = $password;
	$user->status = 2;	
	$user->save();

	if($user){
		session_start();
		$_SESSION['name']= $user->ime;
		$_SESSION['nadimak']= $user->nadimak;
		$_SESSION['status']= $user->status;
		header("location:alert.php");
		
	}
}
?>