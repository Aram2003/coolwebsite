<div class="col-lg-4 col-md-4">
        <span class="label label-default rank-label">Hi <?php echo $_SESSION["signedInUser"]; ?></span>
        <a href="<?php echo $set["url"] ?>admin/logout.php" class="btn btn-sm">- <p style="color:white;">Log Out</p> -</a>
        <hr>
		<h2 style="color:white">Links</h2>
	    <div class="list-group">
                  <a href="<?php echo $set["url"] ?>index.php" class="list-group-item list-group-item-action" target="_blank">HOME</a>
                   <a href="<?php echo $set["url"] ?>admin/pages/index.php" class="list-group-item list-group-item-action">Pages CRUD</a>
                   <a href="<?php echo $set["url"] ?>admin/products/index.php" class="list-group-item list-group-item-action">Products CRUD</a>
                   <a href="<?php echo $set["url"] ?>admin/electronics/index.php" class="list-group-item list-group-item-action">Electronics CRUD</a>
                   <a href="<?php echo $set["url"] ?>admin/games/index.php" class="list-group-item list-group-item-action">Games CRUD</a>
       </div>
</div>