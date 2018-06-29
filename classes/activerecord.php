<?php

class activerecord {
	public function update (){
		$db=db::getConnection();
		$tabela=static::$table;
		$id=static::$key;
		$upit="update {$tabela} set ";
		$upit.=$this->generisiPolja();
		$upit.=" where {$id}={$this->id}";
		echo $upit;
		$db->exec($upit);
	}
	public static function delete ($id){
		$db=db::getConnection();
		$tabela=static::$table;
		$key= static::$key;
		$db->exec("delete from {$tabela} where {$key}={$id}");
	}
	public function generisiPolja(){
		$polja="";
		$glavnaKolona=static::$key;
		foreach($this as $poljeKljuc=>$poljeVrednost){
			if($poljeKljuc==$glavnaKolona)continue;
			$polja.=$poljeKljuc."='".$poljeVrednost."',";
		}
		    $polja=rtrim($polja,",");
			return $polja;
		}
	public function save(){
		$db=db::getConnection();
		$tabela=static::$table;
		$upit="insert into {$tabela} set ";
		$upit.=$this->generisiPolja();
		echo $upit;
		$db->exec($upit);
		$kljucnaKolona=static::$key;
		$this->kljucnaKolona=$db->lastInsertId();
	}
	public static function get($id=null){
		$db=db::getConnection();
		$tabela=static::$table;
		$key= static::$key;
		if($id!=null){
	
			$res=$db->query("select * from {$tabela} where {$key}={$id}");
			$res->setFetchMode(PDO::FETCH_CLASS,get_called_class());
			return $res->fetch();
			
		}
		$res=$db->query("select * from {$tabela}");
		$res->setFetchMode(PDO::FETCH_CLASS,get_called_class());
		$rezultat=[];
		while($rw=$res->fetch()){
			$rezultat[]=$rw;
		}
		return $rezultat;
	}
	

}
