<?php
define("DBUSER", "root");
define("DBPASS", "");
define("DNS", "mysql:host=localhost;dbname=fotoaparati");
define("APP_DIR", "c://wamp64/www/zavrsni_rad");

function __autoload($class) {
	require_once APP_DIR . "/classes/".$class.".php";
}