<?php

class Products extends ActiveRecord {
	public $Firma,$Model,$Slika, $tip_proizvoda,$tip_fotoaparata,$dostupnost,$cena,$opis;	
	public static $table= "proizvodi"; 
	public static $idProizvoda="id_proizvoda";
	
}

