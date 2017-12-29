<?php
$id= isset($_GET['id_p'])&&is_numeric($_GET['id_p'])?$_GET['id_p']:0;
$rw=  Db::query("select * from proizvodi join firma on proizvodi.Firma = firma.id_firme where id_proizvoda={$id}");
$pro = $rw->fetch(PDO::FETCH_OBJ); 
if(!$rw){
	echo "Invalid";
}
else {
	echo "<div class= 'allBox'><h3 class='naslov_buy'><br><b> {$pro->ime} {$pro->Model}</b> </h3><img src={$pro->Slika} width='170' height='170' alt='photo 1' class='left' /><br><div class='info'><p><b><br><br>Price:</b><b> $ {$pro->cena}</b></p><br>";
}

?>

	<form action="?page=5" method="post">
	<input type="hidden" name="id_p" value = "<?php echo $pro->id_proizvoda ?>">
	<input type="number" name="kolicina">
	<input type="submit" value="Add">
	</form>