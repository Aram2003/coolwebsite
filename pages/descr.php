<?php include "../inc/settings.php" ?>
<?php include "../inc/connection.php" ?>
<!DOCTYPE html>
	<html>
	<head>
		<link rel="shortcut icon" href="../images/store.ico" />
		 <?php include("../templates/tpl_title.php"); ?>
		 <?php include("../templates/tpl_meta.php"); ?>
        <?php include("../templates/tpl_styles.php"); ?>
        <style type="text/css">
    	body{
		background-image:url("../images/sbg.jpg");
		background-attachment: fixed;
		}
		#list,#list2{
			color:black;
		}
		</style>
	</head>
	<body class = "big-box">
	<?php include ("../templates/tpl_header.php") ?>
	<?php include ("../templates/tpl_descr_content.php") ?>
	<?php include("../templates/tpl_footer.php"); ?>
    <?php include("../templates/tpl_scripts.php"); ?>
	</body>
	</html>	
