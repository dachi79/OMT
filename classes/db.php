<?php

class db {
	private static $conn=null;
	public static function getConnection(){
		if(!self::$conn){
			self::$conn=new PDO("mysql:host=localhost;dbname=omt","root","");
		}
		return self::$conn;
	}
}
