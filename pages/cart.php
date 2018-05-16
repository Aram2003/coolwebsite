<?php include "../inc/connection.php" ?>
<?php include "../inc/settings.php" ?>
<?php 
if(isset($_POST["name"]) && isset($_POST["sname"]) && isset($_POST["country"]) && isset($_POST["city"])
    && isset($_POST["region"]) && isset($_POST["code"]) && isset($_POST["mail"]) 
    && isset($_POST["adress"]) && isset($_POST["postalindex"]) && isset($_POST["tele"])){
	$name = $_POST["name"];
	$sname = $_POST["sname"];
	$country = $_POST["country"];
	$city = $_POST["city"];
	$region = $_POST["region"];
	$code = $_POST["code"];
	$mail = $_POST["mail"];
	$adress = $_POST["adress"];
	$postal = $_POST["postalindex"];
	$tele = $_POST["tele"];
	$sql = "INSERT INTO `clientinfo`
	(`name`,`sname`,`country`,`city`,`region`,`code`,`mail`,`adress`,`postalindex`,`tele`)
	VALUES
	('$name','$sname','$country','$city','$region','$code','$mail','$adress','$postal','$tele')"; 
	mysqli_query($kap,$sql);
	echo "<p style='color:white'>THANKS FOR SHOPPING!! Your product will arrive for 1-2 month.<br>
	WE HOPE YOU WILL ENJOY IT!!!
	</p>";
}
 ?>

<html>
<head>
	<?php include("../templates/tpl_title.php"); ?>
	<?php include("../templates/tpl_meta.php"); ?>
    <?php include("../templates/tpl_styles.php"); ?>
    <link rel="shortcut icon" href="../images/store.ico"/>
</head>
<body class="big-box" style = "background-image:url(../images/admin.jpg)">
<?php include "../templates/tpl_header.php" ?>
<form action="" method="POST" class="form-group">
	<input type="text" class = "info"  name="name" placeholder="Name" class="form-control">
	<input type="text" class = "info"  name="sname" placeholder="Surname" class="form-control"><br>
	<select class = "info" name="country">
	<option value="">Country</option>
	<option value="Afghanistan">Afghanistan</option>
	<option value="Albania">Albania</option>
	<option value="Algeria">Algeria</option>
	<option value="Angola">Angola</option>
	<option value="Argentina">Argentina</option>
	<option value="Armenia">Armenia</option>
	<option value="Arruba">Arruba</option>
	<option value="Bolivia">Bolivia</option>
	<option value="Brazil">Brazil</option>
	<option value="Chile">Chile</option>
	<option value="Cuba">Cuba</option>
	<option value="France">France</option>
	<option value="Germany">Germany</option>
	<option value="Greece">Germany</option>
	<option value="India">India</option>
	<option value="Iran">Iran</option>
	<option value="Italy">Italy</option>
	<option value="Russia">Russia</option>
	<option value="Syria">Syria</option>
	<option value="USA">USA</option>
	<input type="text" class = "info" name="city" placeholder="City" class="form-control"><br>
	<input type="text" class = "info"  name="region" placeholder="Region" class="form-control">
	<input type="text" class = "info"  name="adress" placeholder="Adress" class="form-control"><br>
	<input type="number" class = "info1" name="code" placeholder="Cartcode" class="form-control"><br>
	<input type="text" class = "info1"  name="mail" placeholder="Mail" class="form-control"><br>
	<input type="number" class = "info1"  name="postalindex" placeholder="Postal Index" class="form-control"><br>
	<input type="number" class = "info1"  name="tele" placeholder="Telephone" class="form-control"><br>
	<button type="submit" class="btn btn-sm btn-add-to-cart">Buy</button>
	</form>
<?php include "../templates/tpl_footer.php" ?>
</body>
</html>