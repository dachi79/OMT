<?php
require "../config.php";
session_start();
if(!isset($_SESSION['name'])){
	header("location:../index.php");
}
if($_SESSION['status']!=2){
	header("location:../pocetna.php");
}

$zenskeMajce=new zene;
if(isset($_GET['mid'])){
	$zenskeMajce=zene::get($_GET['mid']);
}
if(isset($_POST['btn_insert'])){
	$zenskeMajce=new zene;
	$zenskeMajce->id=$_POST['id'];
	$zenskeMajce->naziv=$_POST['naziv'];
	//$muskeMajce->slika=$_POST['fup_image'];
	if(isset($_FILES['fup_image'])){
		move_uploaded_file($_FILES['fup_image']['tmp_name'],"../slike/woman/".$_FILES['fup_image']['name']);
		$zenskeMajce->slika = $_FILES['fup_image']['name'];
		}
	$zenskeMajce->cena=$_POST['cena'];
	$zenskeMajce->boja=$_POST['boja'];
	$zenskeMajce->save();
}
if(isset($_POST['btn_update'])){
	$zenskeMajce=new zene;
	$zenskeMajce->id=$_POST['id'];
	$zenskeMajce->naziv=$_POST['naziv'];
	//$muskeMajce->slika=$_POST['fup_image'];
	if(isset($_FILES['fup_image'])&&$_FILES['fup_image']['size']>0){
		move_uploaded_file($_FILES['fup_image']['tmp_name'],"../slike/woman/".$_FILES['fup_image']['name']);
		$zenskeMajce->slika = $_FILES['fup_image']['name'];
	} else {
		$zenskeMajce->slika=$_POST['slika'];
	}
	$zenskeMajce->cena=$_POST['cena'];
	$zenskeMajce->boja=$_POST['boja'];
	$zenskeMajce->update();
}
if(isset($_POST['btn_delete'])){
	$zenskeMajce=new zene;
	$zene_id=$_POST['id'];
	$zenskeMajce->delete($zene_id);
}
?>
<br><br>
<a style=font-size:22px;color:purple; href="admin.php";> #Naslovna</a><br>

<h1>Zenske majice<h1>
<form action="" method="post" enctype="multipart/form-data" >
<select onchange="if(this.value<0) return;window.location='?mid='+this.value" name="zenskeMajce">
<option value="-1">Izaberite majicu</option>

<?php
$sveZenskeMajice=zene::get();

foreach($sveZenskeMajice as $majca){
	echo "<option " . ($sveZenskeMajice->id==$majca->id?"selected":"") . "value='{$majca->id}'>{$majca->naziv}</option><br>";
}
?>
</select>
<br>
<input type="hidden" name="id" value="<?php echo $zenskeMajce->id; ?>" >
<br>
Naziv:<br>
<input type="text" name="naziv" value="<?php echo $zenskeMajce->naziv;?>" >
<br>
Naziv slike:<br>
<input type="text" value="<?php echo $zenskeMajce->slika; ?>" name="slika" >
<br>
Slika:<br>
<img  src="../slike/woman/<?php echo $zenskeMajce->slika; ?>" width="200" height="150" />
<br>
<input type="file" name="fup_image" value="<?php echo $zenskeMajce->slika;?>" >
<br>
Cena:<br>
<input type="text" name="cena" value="<?php echo $zenskeMajce->cena;?>" >
<br>
Boja:<br>
<input type="text" name="boja" value="<?php echo $zenskeMajce->boja;?>" >
<br>
<input type="submit" name="btn_insert" value="Add new" />
<input type="submit" name="btn_update" value="Update" />
<input type="submit" name="btn_delete" value="Delete" />
</form>
