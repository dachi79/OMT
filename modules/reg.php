<?php

require "../config.php";
$so="Omt_adaačsodj_ASAD5611_sadsjha__askhjds";
if(isset($_POST['omtime'])&& isset($_POST['omtnadimak'])&& isset($_POST['omtemail'])&&isset($_POST['omtpass'])){
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
$email="dachi79@gmail.com";
$username="dakifaki79";


$conn=db::getConnection();
$res=$conn->query("select * from users where ime='{$username}' or email='{$email}'");
$svi=$res->fetch(PDO::FETCH_OBJ);
print_r($svi);