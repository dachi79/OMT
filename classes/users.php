<?php

class users extends activeRecord  {
	public $id;	
	public $ime;	
	public $nadimak;	
	public $email;	
	public $password;
	public $status;
	
	public static $table="users";
	public static $key="id";
	
}