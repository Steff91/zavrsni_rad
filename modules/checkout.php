<?php

if(isset($_POST['btn_confirm'])) {
	$ime= $_POST['ime'];
	$adresa= $_POST['adresa'];
	session_start();
	if($_SESSION['status']==1||$_SESSION['status']==2){
	if(!isset($_SESSION['card'])||empty($_SESSION['card'])){
		echo "Korpa je prazna.";
	}
	else{
	$card= json_encode($_SESSION['card']);
	$sql = "INSERT INTO `porudzbine` (`id_porudzbine`, `ime`, `adresa`, `proizvodi`) VALUES (null,'{$ime}','{$adresa}','{$card}');";
	$prep= Db::getConn()->prepare($sql);
	$prep->execute();
	$_SESSION['card']= array();
	}
	}
	else {
		die("<h2>Morate biti prijavljeni ako želite da kupite proizvod</h2>");
	}
}


?>



<form method="post" action="">
<p>Ime i prezime:</p>
<input type="text" name="ime">
<p>Adresa:</p>
<input type="text" name="adresa"><br><br>
<input type="submit" name="btn_confirm" value="Pošalji">
</form>

