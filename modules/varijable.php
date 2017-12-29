<?php

$search =  isset($_POST['search'])?"where Model like '%{$_POST['search']}%' or ime like '%{$_POST['search']}%'":"";
$searchIme =  isset($_POST['search'])?"and ime like '%{$_POST['search']}%'":"";
$sort = isset($_POST['sort'])?"order by {$_POST['sort']}":"";
$tip_proizvoda = isset($_POST['tip_proizvoda'])?"and tip_proizvoda = {$_POST['tip_proizvoda']}":"";
$firma =  isset($_POST['firma'])?"and Firma = {$_POST['firma']}":"";
//$firme = implode(",",$_POST['firma']);






