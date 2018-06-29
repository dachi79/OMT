<?php
require "../config.php";
session_start();
if(!isset($_SESSION['name'])){
	header("location:../index.php");
}
if($_SESSION['status']!=2){
	header("location:../pocetna.php");
}

$muskeMajce=new muskarci;
if(isset($_GET['mid'])){
	$muskeMajce=muskarci::get($_GET['mid']);
}
if(isset($_POST['btn_insert'])){
	$muskeMajce=new muskarci;
	$muskeMajce->id=$_POST['id'];
	$muskeMajce->naziv=$_POST['naziv'];
	if(isset($_FILES['fup_image'])){
		move_uploaded_file($_FILES['fup_image']['tmp_name'],"../slike/men/".$_FILES['fup_image']['name']);
		$muskeMajce->slika = $_FILES['fup_image']['name'];
		}
	$muskeMajce->cena=$_POST['cena'];
	$muskeMajce->boja=$_POST['boja'];
	$muskeMajce->save();
}
if(isset($_POST['btn_update'])){
	$muskeMajce=new muskarci;
	$muskeMajce->id=$_POST['id'];
	$muskeMajce->naziv=$_POST['naziv'];
	if(isset($_FILES['fup_image'])&&$_FILES['fup_image']['size']>0){
		move_uploaded_file($_FILES['fup_image']['tmp_name'],"../slike/men/".$_FILES['fup_image']['name']);
		$muskeMajce->slika = $_FILES['fup_image']['name'];
	} else {
		$muskeMajce->slika = $_POST['slika'];
	}
	$muskeMajce->cena=$_POST['cena'];
	$muskeMajce->boja=$_POST['boja'];
	$muskeMajce->update();
}
if(isset($_POST['btn_delete'])){
	$muskeMajce=new muskarci;
	$muskarci_id=$_POST['id'];
	$muskeMajce->delete($muskarci_id);

}
?>
<br><br>
<a style=font-size:22px;color:purple; href="admin.php";> #Naslovna</a><br>

<h1>Muske majice<h1>
<form action="" method="post" enctype="multipart/form-data" >
<select onchange="if(this.value<0) return;window.location='?mid='+this.value" name="muskeMajce">
<option value="-1">Izaberite majicu</option>

<?php
$sveMuskemajice=muskarci::get();

foreach($sveMuskemajice as $majca){
	echo "<option " . ($sveMuskemajice->id==$majca->id?"selected":"") . "value='{$majca->id}'>{$majca->naziv}</option><br>";
}
?>
</select>
<br>
<input type="hidden" name="id" value="<?php echo $muskeMajce->id; ?>" >
<br>
Naziv:<br>
<input type="text" name="naziv" value="<?php echo $muskeMajce->naziv;?>" >
<br>
Naziv slike:<br>
<input type="text" value="<?php echo $muskeMajce->slika; ?>" name="slika" >
<br>
Slika:<br>
<img  src="../slike/men/<?php echo $muskeMajce->slika; ?>" width="200" height="150" />
<br>
<input type="file" name="fup_image" value="<?php echo $muskeMajce->slika;?>" >
<br>
Cena:<br>
<input type="text" name="cena" value="<?php echo $muskeMajce->cena;?>" >
<br>
Boja:<br>
<input type="text" name="boja" value="<?php echo $muskeMajce->boja;?>" >
<br>
<input type="submit" name="btn_insert" value="Add new" />
<input type="submit" name="btn_update" value="Update" />
<input type="submit" name="btn_delete" value="Delete" />
</form>
