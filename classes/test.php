<?php

require "../config.php";

$conn=db::getConnection();

$res=$conn->query("select * from users");




    $user = new users;
	
	$user->delete(12);

