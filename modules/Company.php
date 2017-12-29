<?php
 $aboutUs=AboutUs::getAll();
 foreach($aboutUs as $clanak){
	 echo "<div class='col-lg-8 col-lg-offset-2'><h1>{$clanak->naslov}</h1><br><br><p>{$clanak->opis}</p></div>";
 }