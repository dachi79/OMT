<?php
require "../config.php";
session_start();
if(!isset($_SESSION['name'])){
	header("location:../index.php");
}
if($_SESSION['status']!=2){
	header("location:../pocetna.php");
}

$so="Omt_adaačsodj_ASAD5611_sadsjha__askhjds";
$korisnici=new users;

if(isset($_GET['mid'])){
	$korisnici=users::get($_GET['mid']);
}
if(isset($_POST['btn_insert'])){
	$korisnici=new users;
	$korisnici->ime=$_POST['ime'];
	$korisnici->nadimak=$_POST['nadimak'];
	$korisnici->email=$_POST['email'];
	$korisnici->password=md5($_POST['passwd'].$so);
	$korisnici->status=$_POST['status'];
	$korisnici->save();
}
if(isset($_POST['btn_update'])){
	$korisnici=new users;
	$korisnici->id=$_POST['id'];
	$korisnici->ime=$_POST['ime'];
	$korisnici->nadimak=$_POST['nadimak'];
	$korisnici->email=$_POST['email'];
	if(isset($_POST['passwd']) && $_POST['passwd'] !=""){
		$korisnici->password=md5($_POST['passwd'].$so);
	} else {
		$korisnici->password=$_POST['origipass'];
	}
	$korisnici->status=$_POST['status'];
	$korisnici->update();
}
if(isset($_POST['btn_delete'])){
	$korisnici=new users;
	$korisnikid=$_POST['id'];
	$korisnici->delete($korisnikid);
}

?>
<br><br>
<a style=font-size:22px;color:purple; href="admin.php";> #Naslovna</a><br>
<br>

<h1>Korisnici<h1>

<form method="post" action="">
<select onchange="if(this.value<0) return;window.location='?mid='+this.value" name="korisnici">
<option value="-1">Izaberite korisnika</option>

<?php
$svikorisnici = users::get();

foreach($svikorisnici as $korisnik){
	echo "<option " . ($svikorisnici->id==$korisnik->id?"selected":"") . "value='{$korisnik->id}'>{$korisnik->ime}</option><br>";
}
?>
</select>
<br>
Id usera:<br>
<input type="text" name="id" value="<?php echo $korisnici->id; ?>" >
<br>
Ime:<br>
<input type="text" name="ime" value="<?php echo $korisnici->ime; ?>" >
<br>
Nadimak:<br>
<input type="text" name="nadimak" value="<?php echo $korisnici->nadimak;?>" >
<br>
Email:<br>
<input type="text" name="email" value="<?php echo $korisnici->email;?>" >
<br>
Password:<br>
<input type="text" value="<?php echo $korisnici->password;?>" name="origipass" >
<br>
New Password:<br>
<input type="text" name="passwd" >
<br>
Status:<br>
<input type="text" name="status" value="<?php echo $korisnici->status;?>" >
<br><br>
<input type="submit" name="btn_insert" value="Add new" />
<input type="submit" name="btn_update" value="Update" />
<input type="submit" name="btn_delete" value="Delete" />
</form>