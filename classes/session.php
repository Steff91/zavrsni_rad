<?php

class Session {
	
	public static function startSession () {
		if(!isset($_SESSION)) {
			session_start();
		}
	}
	public static function endSession () {
		if(!isset($_SESSION)) {
			session_start();
			unset($_SESSION['status']);
			session_destroy();
			header("location: ../index.php");
		}
	}
	public static function get ($key, $default=null) {
		self::startSession();
		if(isset($_SESSION[$key])) {
			return $_SESSION [$key];
		}
		else {
		return $default;
		}
	}
	public static function set($key, $value) {
		self::startSession();
		$_SESSION[$key]=$value;
	}
}

