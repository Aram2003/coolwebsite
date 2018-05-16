<?php include "../inc/settings.php" ?>
<?php include "../inc/functions.php" ?>
<?php include "logincheck.php" ?>
<?php include "../inc/connection.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include("../templates/tpl_meta.php"); ?>
        <?php include("../templates/tpl_styles.php"); ?>
        
    </head>
    <body class = "big-box" style="background-image: url('../images/admin.jpg')">
           <article>
            <div class="container">
                <h1 style = "color:white">Admin Pages</h1>
                <hr>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                    	<h2 style = "color:white">Avaliable pages</h2>
                    	<div class="list-group">
                    			<a href="pages/index.php" class="list-group-item list-group-item-action">Pages CRUD</a>
                    			<a href="products/index.php" class="list-group-item list-group-item-action">Products CRUD</a>
                                <a href="electronics/index.php" class="list-group-item list-group-item-action">Electronics CRUD</a>
                                <a href="games/index.php" class="list-group-item list-group-item-action">Games CRUD</a>
                    	</div>
                    </div>
 	              <?php include("templates/sidebar.php"); ?>
                 </div>
             </div>
          </article>
        <?php include("../templates/tpl_footer.php"); ?>
        <?php include("../templates/tpl_scripts.php"); ?>
    </body>
</html>