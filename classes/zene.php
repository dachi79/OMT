<?php

class zene extends activerecord {
	public $id;	
	public $naziv;	
	public $slika;	
	public $cena;	
	public $boja;
	
	public static $table="zene";
	public static $key="id";
	
}