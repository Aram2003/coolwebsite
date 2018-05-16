<!DOCTYPE html>
<html>
<head>
	<?php include("inc/settings.php"); ?>
	<?php include("inc/connection.php"); ?>
	<?php include "templates/tpl_title.php" ?>
	<link rel="shortcut icon" href="images/asa.ico" />
	<?php include "templates/tpl_styles.php" ?>
  <style type="text/css">
    #list{
      margin-right:400px;
    }
    body{
      background-image:url("images/aw.jpg");
    }
  </style>
</head>
<body>
<div class="big-box">
  <div class="searchbox">
<form action="pages/res.php" method="GET">
    <input class="search" type="text" name="search" placeholder="Search Products..">
    <input class="results" type="submit" name="searchsubmit" value="Search">
</form>
</div>
  <?php include "templates/tpl_home_header.php" ?>
  <?php include "templates/tpl_home_content.php" ?>
  <?php include "templates/tpl_footer.php" ?>
  <?php include "templates/tpl_scripts.php" ?>
</div>
</body>
</html>