<?php

class muskarci extends activeRecord  {
	public $id;	
	public $naziv;	
	public $slika;	
	public $cena;	
	public $boja;
	
	public static $table="muskarci";
	public static $key="id";
	
}