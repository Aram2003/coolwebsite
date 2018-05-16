<!DOCTYPE html>
<html>
<head>
<?php include("../inc/settings.php"); ?>
<?php include("../inc/connection.php"); ?>
<title>Game Store</title>
<meta charset="utf-8">
<link rel="shortcut icon" href="../images/games.ico" />
<?php include "../templates/tpl_styles.php" ?>
<style>
body{
	background-image:url("../images/sbg.jpg");
	background-attachment: fixed;
}
#list,#list2{
			color:black;
		}
</style>
</head>
<body>
<div class = "big-box">
<?php include "../templates/tpl_header.php" ?>
<?php include "../templates/tpl_game_content.php" ?>
<?php include "../templates/tpl_footer.php" ?>
</body>
</html>