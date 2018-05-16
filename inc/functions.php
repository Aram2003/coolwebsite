<?php
session_start();
function dump($abc){
	echo "<pre>";
	var_dump($abc);
	echo "</pre>";
}
function checkUser($username,$password){
	$users = array("Aram"=>"aram2003"); 
	if(isset($users[$username]) && $users[$username]==$password){
		return true;
	}
}
function signIn($username){
	$_SESSION["signedInUser"] = $username;
}
function signOut(){
	session_destroy();
}
function isSignedIn(){
	if(isset($_SESSION["signedInUser"])){
		return true;
	}
	return false;
}
?>