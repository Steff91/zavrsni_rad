<?php
session_start();
if(!isset($_SESSION['status'])||$_SESSION['status']!=3) {
	header("Location: ../index.php");
	
}
?>

<div style="padding:20px">
<a href="firma.php">Ubaci proizvode</a><br><br>
<a href="Tekst.php">Ubaci tekst</a><br><br>
<a href="logout.php">Izadji</a>
</div>