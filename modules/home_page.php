<div class="container">
<div class="row">
<?php
$homepage = Homepage::getAll();

foreach($homepage as $rw) {

echo "<div class='col-lg-12'><img id='discount' src='images/{$rw->slika}' alt='discount'/></div>";

}
?>
</div>
<h2 id="newest_products">Newest products</h2>
<div class="row special">
<?php

$products = Products::getAll("join firma on proizvodi.Firma=firma.id_firme order by id_proizvoda desc limit 3");

foreach($products as $proizvod) {
	?>

    <div class="box col-lg-4">
        <div class="product-header">
        <h3 class="product-headline"><?= $proizvod->ime . " " . $proizvod->Model ?></h3>
        </div>
        <hr>
        <div class="product-image">
        <img src="<?=$proizvod->Slika?>" width='220px' alt='photo 1'/>
        </div>
        <div class="product-readmore">
        <a href='?page=6&id_p=<?php echo $proizvod->id_proizvoda ?>'>TAKE A LOOK</a>
        </div>
    </div>

	<?php
}
?>
</div>
    <h2 id="newest_products">Special offer</h2>
    <div class="row special">
		<?php

		$products = Products::getAll("join firma on proizvodi.Firma=firma.id_firme order by id_proizvoda limit 3");

		foreach($products as $proizvod) {
			?>

            <div class="box col-lg-4">
                <div class="product-header">
                    <?php echo "<h3 class=\"product-headline\">" . $proizvod->ime . " " . $proizvod->Model . "</h3>" ?>
                </div>
                <hr>
                <div class="product-image">
                    <img src="<?=$proizvod->Slika?>" width='220px' alt='photo 1'/>
                </div>
                <div class="discount-image">
                    <img src="images/20-off-png-0.png" width='100px' alt='photo 1'/>
                </div>
                <div class="product-readmore1">
                    <a href='?page=6&id_p=<?php echo $proizvod->id_proizvoda ?>'>TAKE A LOOK</a>
                </div>
            </div>

			<?php
		}
		?>
    </div>








</div>




