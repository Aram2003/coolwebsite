<?php include "../inc/functions.php" ?>
<?php include "../inc/connection.php" ?>
<?php include "../inc/settings.php" ?>
<?php
  if(isset($_POST["username"]) && isset($_POST["password"])){
       $username = $_POST["username"];
       $password = $_POST["password"];
       if(checkUser($username, $password)){
          signIn($username);
          header("location: index.php");
       }
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <?php include("../templates/tpl_meta.php"); ?>
        <?php include("../templates/tpl_styles.php"); ?>
    </head>
    <body class = "big-box" style="background-image: url('../images/admin.jpg')">
           <article>
            <div class="container">
                <h1 style="color:white">Admin Pages</h1>
                <hr>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                    <h2 style="color:white">Log In</h2>
				<form action="" method="POST" class="form-group">
					<input type="text" name="username" placeholder="Username" class="form-control"><br>
					<input type="password" name="password" placeholder="Password" class="form-control"><br>
					<button type="submit" class="btn btn-default">Log in</button>
				</form>
                    </div>
                 </div>
             </div>
          </article>
        <?php include("../templates/tpl_footer.php"); ?>
        <?php include("../templates/tpl_scripts.php"); ?>
    </body>
</html>