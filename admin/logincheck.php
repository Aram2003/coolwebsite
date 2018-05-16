<?php
if(!isSignedIn()){
	header("location: ".$set["url"]."admin/login.php");
}
?>