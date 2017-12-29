<form  method="post">
<div class="form col-lg-4 col-lg-offset-8">
	<input class='search1' type="text" name="search" placeholder="search">
   <select class='sort1' name="sort" id="slct">
	  <option value="id_proizvoda">Order by</option>
	  <option value="ime">Name</option>
      <option value="cena asc">Price(low to high)</option>
      <option value="cena desc">Price(high to low)</option>
      <option value="Firma">Brand</option>
   </select>
   	<input class='submit1' type="submit" value="submit" name="search_sort">
  </div> 

<div id="checkboxAll" class="col-lg-2" >

	<div id='checkbox'>
	 <input type="checkbox" name="tip_proizvoda" value="1">Fotoaparati<br>
	 <input type="checkbox" name="tip_proizvoda" value="2">Objektivi<br>
	 <input type="checkbox" name="tip_proizvoda" value="3">Memorijske kartice<br>
	 <input type="checkbox" name="tip_proizvoda" value="4">Stativi<br>
	 </div>
	   <div id='checkbox1'>
	 <input type="checkbox" name="firma" value="1">Nikon<br>
	 <input type="checkbox" name="firma" value="2">Canon<br>
	 <input type="checkbox" name="firma" value="3">Sony<br>
	 <input type="checkbox" name="firma" value="4">Olympus<br>
	 <input type="checkbox" name="firma" value="5">SanDisk<br>
	 <input type="checkbox" name="firma" value="6">Manfrotto<br>
	 <input type="checkbox" name="firma" value="7">Kingston<br>
	 </div>
	 </div>
	</form>

<div id="products" class="row">
<?php

$search =  isset($_POST['search'])?"where Model like '%{$_POST['search']}%'":"";
$sort = isset($_POST['sort'])?"order by {$_POST['sort']}":"";
$tip_proizvoda = isset($_POST['tip_proizvoda'])?"and tip_proizvoda = {$_POST['tip_proizvoda']}":"";
$firma=  isset($_POST['firma'])?"and Firma = {$_POST['firma']}":"";
$products = Products::getAll("join firma on proizvodi.Firma=firma.id_firme $search $firma $tip_proizvoda $sort");



foreach($products as $proizvod) {

	?>
    <div class="
    <?php
    if($proizvod->id_proizvoda % 2 != 0) {
        echo "leftbox col-lg-5";
    }
    else {
        echo "rightbox col-lg-5";
    }
    ?>"
    ><br><h3><?= $proizvod->ime . " " . $proizvod->Model ?></h3><img src="<?=$proizvod->Slika?>" width='170' height='170' alt='photo 1' class='left' /><br><div class='info'><p><b>Price:</b><b> $<?=$proizvod->cena?></b></p><p><b>Availability:</b><?php
if ($proizvod->dostupnost==1) {
		echo "<b>In stocks</b>";
		}
	else {
		echo "<b>Out of stocks</b>";
		}
?>

</p></div><p class ='readmore'><a href='?page=6&id_p=<?php echo $proizvod->id_proizvoda ?>'><b>BUY NOW</b></a></p>

</div>

<?php
		}
?>
</div>

<div class='clear'></div>
