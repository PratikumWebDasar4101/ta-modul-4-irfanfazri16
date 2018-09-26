<?php
session_start();
$user =array(
       "nama"=>"irfan",
       "username"=>"admin",
       "password"=>12345,
       "notelp"=>"0812345678"

);
if ($user["username"] == $_POST["username"] && $user["password"] == $_POST["password"]) {
	$_SESSION["username"] = $user["username"];
	$_SESSION["user"] = $user;
	header("Location: formulir.php");
}else {
	header("Location: login.php");
}
?>