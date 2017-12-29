<?php
require "C://wamp64/www/zavrsni_rad/config.php";
if(!Session::get('status')||Session::get('status')!=3) {
	header("Location: index.php");
}
Db::getConn();



	if (isset($_POST['btn_insert'])){
		$selectedProduct = new Products;	
		$selectedProduct->Firma=  $_POST['Firma'];		
		$selectedProduct->Model= $_POST['Model'];
		$selectedProduct->Slika= $_POST['Slika'];
		$selectedProduct->tip_proizvoda= $_POST['tip_proizvoda'];
		$selectedProduct->tip_fotoaparata= $_POST['tip_fotoaparata'];
		$selectedProduct->dostupnost= $_POST['dostupnost'];
		$selectedProduct->cena= $_POST['cena'];
		$selectedProduct->opis= $_POST['opis'];
		$selectedProduct->insert();
	}

	if (isset($_POST['btn_update'])){
		$selectedProduct = new Products;	
		$selectedProduct->id_proizvoda= $_POST['id_proizvoda'];
		$selectedProduct->Firma=  $_POST['Firma'];		
		$selectedProduct->Model= $_POST['Model'];
		$selectedProduct->Slika= $_POST['Slika'];
		$selectedProduct->tip_proizvoda= $_POST['tip_proizvoda'];
		$selectedProduct->tip_fotoaparata= $_POST['tip_fotoaparata'];
		$selectedProduct->dostupnost= $_POST['dostupnost'];
		$selectedProduct->cena= $_POST['cena'];
		$selectedProduct->opis= $_POST['opis'];
		$selectedProduct->update();
	}

	if (isset($_POST['btn_delete'])){
		$selectedCategory = new Products;	
		$selected_id= $_POST['id_proizvoda'];
		$selectedCategory->del($selected_id);
	}

?>

<form method="post" action="">

<p>Id</p>
<input type="text" name="id_proizvoda"></input><br><br>

<select name="Firma">
<option value="-1">Izaberi brend</option>
<?php
$brands=Brand::getAll();
	foreach ($brands as $rw) {
		echo "<option value='{$rw->id_firme}'>{$rw->ime}</option>";
		}	

		
		?>

</select><br>




<p>Model</p>
<input type="text" name="Model"></input><br><br>



<p>Slika</p>
<input type="text" name="Slika"></input><br><br>





<select name="tip_proizvoda">
<option value="-1">Izaberi tip proizvoda</option>
<?php
$productType=ProductType::getAll();
	foreach ($productType as $producty ) {
		echo "<option value='{$producty->id}'>{$producty->Naziv}</option>";
		}	
	
				
?>
</select><br><br>





<select name="tip_fotoaparata">
<option value="-1">Izaberi tip fotoaparata</option>

<?php
		$cameraType=CameraType::getAll();
		foreach ($cameraType as $type) {
	echo "<option value='{$type->id}'>{$type->Naziv}</option>";
		}
		
				
?>

</select><br><br>
<p>Dostupnost</p>
<select name="dostupnost">
<option value="-1">Dostupno ili ne</option>

<?php
		$availability=Availability::getAll();
		foreach ($availability as $one) {
	echo "<option value='{$one->id}'>{$one->dostupnost}</option>";
		}
		
?>
</select><br><br>
<p>Cena</p>
<input type="number" name="cena"></input><br><br>
<p>Opis</p>
<input type="text" name="opis"></input><br><br>
<input type="submit" name="btn_insert" value="Dodaj">
<input type="submit" name="btn_update" value="Prepravi">
<input type="submit" name="btn_delete" value="Izbriši">
</form>
