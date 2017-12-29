<?php
session_start();
require "varijable.php";
Db::getConn();


if(!isset($_SESSION['card'])){
		$_SESSION['card'] = array();
	}
	
if(isset($_POST['id_p'])&&isset($_POST['kolicina'])) {
	if(isset($_SESSION['card'][$_POST['id_p']])){
	$_SESSION['card'][$_POST['id_p']]+=$_POST['kolicina'];
}
	else {
	$_SESSION['card'][$_POST['id_p']]=$_POST['kolicina'];
	}
	
	if($_SESSION['card'][$_POST['id_p']]<=0){
		unset($_SESSION['card'][$_POST['id_p']]);
	}
	
}
if(empty($_SESSION['card'])){
		echo "<div class='empty_cart'><h2>Your cart is empty</h2><br><a href='index.php?page=2'><i class=\"fa fa-angle-double-left\" aria-hidden=\"true\"></i> Go back to shop</a></div>";
		return;
	}
	
$product_card_id = array_keys($_SESSION['card']);
$product_card_string = implode(",",$product_card_id);

$res =  Db::query("select * from proizvodi join firma on proizvodi.Firma = firma.id_firme where id_proizvoda in ({$product_card_string})");

	while ($proizvod = $res->fetch(PDO::FETCH_OBJ)) {
			
	?>
	
    <div class= "leftbox">
	<h2><br><b><?=$proizvod->ime . " " . $proizvod->Model?></b></h2>
<img src=<?=$proizvod->Slika?> width='250' height='250' alt='photo 1' class='left' /><br><div class='info'><p><b>Price:</b><b> $<?=$proizvod->cena?></b></p><p>Quantity: <?=$_SESSION['card'][$proizvod->id_proizvoda]; ?></p><div class='clear'></div></div></div>

	<?php
	}
?>
<div id="checkout"><a href="?page=7">Checkout</a></div>
