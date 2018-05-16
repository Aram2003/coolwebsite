<!DOCTYPE html>
<html>
<head>
<?php include("../inc/settings.php"); ?>
<?php include("../inc/connection.php"); ?>
<?php include "../templates/tpl_title.php" ?>
<?php include("../templates/tpl_meta.php") ?>
<link rel="shortcut icon" href="../images/store.ico"/>
<?php include "../templates/tpl_styles.php" ?>
<style type="text/css">
	#list,#list2{
		color:black;
	}
	body{
		background-image:url("../images/sbg.jpg");
	}
</style>
</head>
<body class= "big-box">
  <div class="searchareadiv">
<form action="res.php" method="GET">
    <input class="search" type="text" name="search" placeholder="Search Products..">
    <input class="results" type="submit" name="searchsubmit" value="Search">
</form>
    </div>
<?php include "../templates/tpl_header.php" ?>
<?php include "../templates/tpl_store_content.php" ?>
<?php include "../templates/tpl_footer.php" ?>
</body>
</html>