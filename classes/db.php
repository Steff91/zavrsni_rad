<?php

abstract class Db {
	
	private static $conn = null;
	private function __construct (){}
	public static function getConn() {
			if(!self::$conn) {
			self::$conn = new PDO(DNS,DBUSER,DBPASS);	
		}
		return self::$conn;
		}
	
	public static function query ($query) {
		$q= Db::getConn()->query($query);
		return $q;
		
	}
	
	
			
	
	
}



