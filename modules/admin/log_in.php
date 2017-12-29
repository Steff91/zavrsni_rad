<?php
require "C://wamp64/www/zavrsni_rad/config.php";

$user = $_POST['uname'];
$pass = $_POST['pass'];


$query= Db::getConn()->query("select * from korisnici where ime_korisnika='{$user}' and pass='{$pass}' limit 1");
$user = $query->fetch(PDO::FETCH_OBJ);

if($user) {
session_start();
$_SESSION['status'] = $user->status;
header('location: index.php');	
}
else {
echo "Invalid user.";	
}
